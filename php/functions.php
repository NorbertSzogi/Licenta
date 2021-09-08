<?php

function deleteTest($course_id, $admin_pass){


    global $conn;
    $admin_id = $_SESSION['admin_id'];



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
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea testului!')</script>");
    }

    echo "<script>alert('Testul a fost sters!')</script>";
}