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

    echo "<link rel='stylesheet' type='text/css' href='../css/admin.css'>
          <style>
            p.title{
                font-size: max(2vw,12px);
            }
          </style>";

global $conn;

$selectCourses = "select * from courses";

$run_courses = mysqli_query($conn, $selectCourses);
echo "<div class='content'>";
while($course = mysqli_fetch_array($run_courses)){
    echo "<div class='gallery'>
            <a href='viewCourse.php?course_id=" . $course["course_id"] . "'>
                <p class='title'> " . $course["title"] . " </p></a></div>";
}

echo "</div";


include("../include/footer.php");

?>


