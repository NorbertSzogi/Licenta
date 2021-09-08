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

$select_course = $conn->prepare("select * from courses where course_id=?");
$select_course->execute(array($course_id));

$course = $select_course->fetch();
echo "<h2 class='title'>" . $course["title"] . "</h2><hr>";
$select_texts = $conn->prepare("select * from texts where course_id=?");
$select_texts ->execute(array($course_id));

$select_files = $conn->prepare("select * from files where course_id=?");
$select_files ->execute(array($course_id));

while($texts = $select_texts->fetch() and $files = $select_files->fetch()){
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

