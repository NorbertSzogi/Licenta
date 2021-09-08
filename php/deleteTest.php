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

                <button class="submit" type="submit" name="submit" onclick="return checkId(document.form1.testId)">Sterge</button>

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

    /*
    $course_id = $_POST["courseId"];
    global $conn;
    $admin_id = $_SESSION['admin_id'];

    $admin_pass = $_POST['adminPassword'];

    $verifyPass = $conn->prepare("select * from admins where admin_id=? and pass=?");

    $verifyPass->execute(array($admin_id,$admin_pass));


    if($verifyPass->rowCount() == 0){
        die("<script>alert('Parola introdusa este gresita!')</script>");
    }

    $verifyQuiz = $conn->prepare("select * from quiz where course_id=?");

    $verifyQuiz ->execute(array($course_id));
    $result = $verifyQuiz->fetch();
    $quiz_id = $result["quiz_id"];

    $select_questions = $conn->prepare("select * from question where quiz_id=?");
    $select_questions->execute(array($quiz_id));

    while($question = $select_questions->fetch()){
        $deleteChoices = $conn->prepare("delete from question_choices where question_id=?");
        $res = $deleteChoices->execute(array($question["question_id"]));

        if(!$res){
            die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea variantelor de raspuns!')</script>");
        }
    }

    $deleteQuestions = $conn->prepare("delete from question where quiz_id=?");
    $res = $deleteQuestions->execute(array($quiz_id));

    if(!$res){
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea intrebarilor!')</script>");
    }

    $deleteQuiz = $conn->prepare("delete from quiz where course_id=?");
    $res = $deleteQuiz->execute(array($course_id));

    if(!$res){
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea testului!')");
    }

    echo "<script>alert('Testul a fost sters!')</script>";*/

}



include("../include/footer.php");