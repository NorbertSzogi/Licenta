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

$course_id = $_GET["course_id"];

$select_course = "select * from courses where course_id='$course_id'";

$run_course = mysqli_query($conn, $select_course);

$result = mysqli_fetch_array($run_course);

$select_texts = "select * from texts where text_course_id='$course_id'";
$select_files = "select * from files where file_course_id='$course_id'";

$run_texts = mysqli_query($conn, $select_texts);
$run_files = mysqli_query($conn, $select_files);

while($texts = mysqli_fetch_array($run_texts) and $files = mysqli_fetch_array($run_files)){
    echo  "<br>" . $texts['text'] . "<br>" . $files['reference'] . "<br>";

}


?>