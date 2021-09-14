<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("location: ../index.php");
}
global $conn;
include("../include/inHeaderAdmin.php");

include ("functions.php");
?>

<link rel="stylesheet" type="text/css" href="../css/admin.css">
<div class="content">
    <form action="" method="post" name="form1">
        <div class="container1">
            <div class="container">
                <h1 align="center" class="a">Stergere test</h1>
                <hr>

                <label for="testId"><b>ID-ul cursului:</b></label>
                <input type="text" placeholder="Introduceti id-ul testului" name="courseId" id="courseId" required>

                <br>

                <label for="adminPassword"><b>Parola:</b></label>
                <input type="password" placeholder="Introduceti parola" name="adminPassword" id="adminPassword" required >


                <hr>

                <button class="submit" type="submit" name="submit" onclick="return checkId(document.form1.courseId)">Sterge</button>

                <button class="reset" type="reset">Reset</button>


            </div>
        </div>
    </form>
</div>

<?php

if(isset($_POST["submit"])){

    $course_id = $_POST["courseId"];
    $admin_pass = $_POST["adminPassword"];

    deleteTest($course_id,$admin_pass);

    

}



include("../include/footer.php");