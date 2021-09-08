<?php
session_start();

if(!isset($_SESSION['admin_id'])) {
    if(!isset($_SESSION['user_id']))
        header("location: ../index.php");
    include("../include/inHeaderUser.php");
}
else{
    include("../include/inHeaderAdmin.php");
}

echo "<link rel='stylesheet' type='text/css' href='../css/admin.css'>";

global $conn;

$selectCourses = $conn->prepare("select * from courses");

$selectCourses ->execute();

echo "<div class='content'>";
while($course = $selectCourses->fetch()){
    echo "<div class='gallery'>
            <a href='haveTest.php?course_id=" . $course["course_id"] . "'>
                <img src='" . $course["image"] . "' width='600' height='400'></a>
                <div class='desc'> " . $course["title"] . " </div></div>";
}

echo "</div>";


include("../include/footer.php");

?>
