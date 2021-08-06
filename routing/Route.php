<?php


namespace routing;


class Route
{
    /** @var string */
    public $path;
    /** @var string */
    public $controller;
    /** @var string */
    public $method;

    public function __construct(string $path, string $controller, string $method)
    {
        $this->path = $path;
        $this->controller = $controller;
        $this->method = $method;
    }
}