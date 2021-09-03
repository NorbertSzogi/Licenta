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
?>
<link rel='stylesheet' type='text/css' href='../css/admin.css'>
<style>
    img.image{
       max-width: 80%;
    }
    hr{
        border: 1px solid black;
    }
</style>

<div class='all_courses'>
<?php

global $conn;

$course_id = $_GET["course_id"];
$select_course = "select * from courses where course_id='$course_id'";
$run_course = mysqli_query($conn, $select_course);
$course = mysqli_fetch_array($run_course);
echo "<h2 class='title'>" . $course["title"] . "</h2><hr>";
$select_texts = "select * from texts where text_course_id='$course_id'";
$select_files = "select * from files where file_course_id='$course_id'";
$run_texts = mysqli_query($conn, $select_texts);
$run_files = mysqli_query($conn, $select_files);
while($texts = mysqli_fetch_array($run_texts) and $files = mysqli_fetch_array($run_files)){
    if(strcmp($texts['text'],"") != 0){
        echo  "<br>" . $texts['text'];
    }
    if(strcmp($files['reference'],"0") != 0) {
        if(strcmp($files['type'],"video") == 0){
            echo "<br><br><video class='video' controls><source src='" . $files['reference'] . "' type='video/mp4'/> </video><br>";
        }
        else {
            echo "<br><br><img class='image' alt='" . $files['reference'] . "' src='" . $files['reference'] . "' width='600' height='400'/><br>";
        }
    }
}
?>
<br><br><br>
</div>
<div class="comments">

</div>

<?php
    include("../include/footer.php");
?>

