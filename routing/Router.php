<?php


namespace routing;


use ReflectionClass;
use ReflectionParameter;

class Router
{
    /** @var Route[] */
    private $routes;

    public function register(Route $route)
    {
        $this->routes[] = $route;
    }

    public function handleRequest(string $request)
    {
        $matches = [];
        foreach ($this->routes as $route) {
            if (preg_match($route->path, $request, $matches)) {
                // $matches[0] will always be equal to $request, so we just shift it off
                array_shift($matches);
                // here comes the magic
                $class = new ReflectionClass($route->controller);
                $method = $class->getMethod($route->method);
                // we instantiate a new class using the elements of the $matches array
                $instance = $class->newInstance(...$matches);
                // equivalent:
                // $instance = $class->newInstanceArgs($matches);
                // then we call the method on the newly instantiated object
                $method->invoke($instance);
                // finally, we return from the function, because we do not want the request to be handled more than once
                return;
            }
        }
        // throw new RuntimeException("The request '$request' did not match any route.");
    }

    private function constructClassFromArray(ReflectionClass $class, array &$array)
    {
        $parameters = $class->getConstructor()->getParameters();
        // construct the arguments needed for its constructor
        $args = [];
        foreach ($parameters as $parameter)
            $args[] = $this->constructArgumentFromArray($parameter, $array);

        // then return the new instance
        return $class->newInstanceArgs($args);
    }

    private function constructArgumentFromArray(ReflectionParameter $parameter, array &$array)
    {
        $type = $parameter->getType();
        // if the parameter was not declared with any type, just return the next element from the array
        if ($type === null)
            return array_shift($array);

        $class = $parameter->getClass();
        // if the parameter is a class type
        if ($class !== null) {
            // make another call that will actually call this method
            return $this->constructClassFromArray($class, $array);
        }

        // we ran out of $array elements
        if (count($array) === 0)
            // but we can pass null if the parameter allows it
            if ($parameter->allowsNull())
                return null;
            else
                //throw new RuntimeException("Cannot construct the '{$parameter->getName()}' in {$parameter->getDeclaringClass()->getName()}::{$parameter->getDeclaringFunction()->getName()} because the array ran out of elements.");

        // if the parameter is a primitive type, just cast it
        switch ($type->getName()) {
            case 'string':
                return (string) array_shift($array);
            case 'int':
                return (int) array_shift($array);
            case 'bool':
                return (bool) array_shift($array);
        }

       // throw new RuntimeException("Cannot construct the '{$parameter->getName()}' parameter in {$parameter->getDeclaringClass()->getName()}::{$parameter->getDeclaringFunction()->getName()} because it is of an invalid type{$type->getName()}.");
    }
}