<?php
include("../include/inHeaderAdmin.php");

?>
<script type="text/javascript" src="../javascript/adminJS.js" > </script>
<link rel="stylesheet" type="text/css" href="../css/admin.css">


<div class="content">
        <form action="" method="post" name="form1">
            <div class="container1">
                <div class="container">
                    <h1 align="center" class="a">Adaugare test</h1>
                    <hr>

                    <label for="courseId"><b>ID-ul cursului:</b></label>
                    <input type="text" placeholder="Introdu id-ul" name="courseId" id="courseId">


                    <label for="question1"><b>Intrebarea 1:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question1" >

                    <input type="radio" name="question_1" onclick="questionValue(this,'choice1-1');"> <span class="variants">Varianta 1</span> <input type="text" id="choice1-1" name="choice1-1">
                    <input type="radio" name="question_1" onclick="questionValue(this,'choice1-2');"> <span class="variants">Varianta 2</span> <input type="text" id="choice1-2" name="choice1-2">
                    <input type="radio" name="question_1" onclick="questionValue(this,'choice1-3');"> <span class="variants">Varianta 3</span> <input type="text" id="choice1-3" name="choice1-3">
                    <input type="radio" name="question_1" onclick="questionValue(this,'choice1-4');"> <span class="variants">Varianta 4</span> <input type="text" id="choice1-4" name="choice1-4">


                    <label for="question2"><b>Intrebarea 2:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question2" >

                    <input type="radio" name="question_2" onclick="questionValue(this,'choice2-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice2-1" name="choice2-1">
                    <input type="radio" name="question_2" onclick="questionValue(this,'choice2-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice2-2" name="choice2-2">
                    <input type="radio" name="question_2" onclick="questionValue(this,'choice2-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice2-3" name="choice2-3">
                    <input type="radio" name="question_2" onclick="questionValue(this,'choice2-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice2-4" name="choice2-4">


                    <label for="question3"><b>Intrebarea 3:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question3" >

                    <input type="radio" name="question_3" onclick="questionValue(this,'choice3-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice3-1" name="choice3-1">
                    <input type="radio" name="question_3" onclick="questionValue(this,'choice3-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice3-2" name="choice3-2">
                    <input type="radio" name="question_3" onclick="questionValue(this,'choice3-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice3-3" name="choice3-3">
                    <input type="radio" name="question_3" onclick="questionValue(this,'choice3-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice3-4" name="choice3-4">


                    <label for="question4"><b>Intrebarea 4:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question4" >

                    <input type="radio" name="question_4" onclick="questionValue(this,'choice4-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice4-1" name="choice4-1">
                    <input type="radio" name="question_4" onclick="questionValue(this,'choice4-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice4-2" name="choice4-2">
                    <input type="radio" name="question_4" onclick="questionValue(this,'choice4-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice4-3" name="choice4-3">
                    <input type="radio" name="question_4" onclick="questionValue(this,'choice4-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice4-4" name="choice4-4">


                    <label for="question5"><b>Intrebarea 5:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question5" >

                    <input type="radio" name="question_5" onclick="questionValue(this,'choice5-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice5-1" name="choice5-1">
                    <input type="radio" name="question_5" onclick="questionValue(this,'choice5-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice5-2" name="choice5-2">
                    <input type="radio" name="question_5" onclick="questionValue(this,'choice5-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice5-3" name="choice5-3">
                    <input type="radio" name="question_5" onclick="questionValue(this,'choice5-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice5-4" name="choice5-4">


                    <label for="question6"><b>Intrebarea 6:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question6" >

                    <input type="radio" name="question_6" onclick="questionValue(this,'choice6-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice6-1" name="choice6-1">
                    <input type="radio" name="question_6" onclick="questionValue(this,'choice6-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice6-2" name="choice6-2">
                    <input type="radio" name="question_6" onclick="questionValue(this,'choice6-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice6-3" name="choice6-3">
                    <input type="radio" name="question_6" onclick="questionValue(this,'choice6-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice6-4" name="choice6-4">


                    <label for="question7"><b>Intrebarea 7:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question7" >

                    <input type="radio" name="question_7" onclick="questionValue(this,'choice7-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice7-1" name="choice7-1">
                    <input type="radio" name="question_7" onclick="questionValue(this,'choice7-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice7-2" name="choice7-2">
                    <input type="radio" name="question_7" onclick="questionValue(this,'choice7-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice7-3" name="choice7-3">
                    <input type="radio" name="question_7" onclick="questionValue(this,'choice7-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice7-4" name="choice7-4">


                    <label for="question8"><b>Intrebarea 8:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question8" >

                    <input type="radio" name="question_8" onclick="questionValue(this,'choice8-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice8-1" name="choice8-1">
                    <input type="radio" name="question_8" onclick="questionValue(this,'choice8-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice8-2" name="choice8-2">
                    <input type="radio" name="question_8" onclick="questionValue(this,'choice8-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice8-3" name="choice8-3">
                    <input type="radio" name="question_8" onclick="questionValue(this,'choice8-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice8-4" name="choice8-4">


                    <label for="question9"><b>Intrebarea 9:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question9" >

                    <input type="radio" name="question_9" onclick="questionValue(this,'choice9-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice9-1" name="choice9-1">
                    <input type="radio" name="question_9" onclick="questionValue(this,'choice9-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice9-2" name="choice9-2">
                    <input type="radio" name="question_9" onclick="questionValue(this,'choice9-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice9-3" name="choice9-3">
                    <input type="radio" name="question_9" onclick="questionValue(this,'choice9-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice9-4" name="choice9-4">


                    <label for="question10"><b>Intrebarea 10:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question10" >

                    <input type="radio" name="question_10" onclick="questionValue(this,'choice10-1')"> <span class="variants">Varianta 1</span> <input type="text" id="choice10-1" name="choice10-1">
                    <input type="radio" name="question_10" onclick="questionValue(this,'choice10-2')"> <span class="variants">Varianta 2</span> <input type="text" id="choice10-2" name="choice10-2">
                    <input type="radio" name="question_10" onclick="questionValue(this,'choice10-3')"> <span class="variants">Varianta 3</span> <input type="text" id="choice10-3" name="choice10-3">
                    <input type="radio" name="question_10" onclick="questionValue(this,'choice10-4')"> <span class="variants">Varianta 4</span> <input type="text" id="choice10-4" name="choice10-4">


                    <hr>

                    <button class="submit" type="submit" name="submit" id="submit" onclick="return checkId(document.form1.courseId)">Adauga</button>

                    <button class="reset" type="reset">Reset</button>


                </div>
            </div>
        </form>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php
include ("../include/footer.php");
global $conn;

if(isset($_POST["submit"])) {
    $course_id = $_POST["courseId"];


    $verifyCourse = $conn->prepare("select * from courses where course_id=?");
    $verifyCourse->execute(array($course_id));

    $rows = $verifyCourse->rowCount();


    if($rows == 0){
        die("<script>alert('Ne pare rau, nu exista niciun curs cu id-ul " . $course_id . " !')</script>");
    }


    $verifyQuiz = $conn->prepare("select * from quiz where course_id=?");
    $verifyQuiz->execute(array($course_id));

    if($verifyQuiz->rowCount() == 1){
        die("<script>alert('Ne pare rau, pentru acest curs deja exista un test!')</script>");
    }


    $id_max = $conn->prepare("SELECT * FROM quiz");

    $id_max ->execute();
    $maxim_id = -1;

    while($result2 = $id_max->fetch()) {
        if((int)$result2["quiz_id"] > $maxim_id) {
            $maxim_id = (int)$result2["quiz_id"];
        }
    }

    if($maxim_id == -1)
        $quiz_id = 0;
    else
        $quiz_id = $maxim_id;

    $quiz_id++;

    $insertQuiz = $conn->prepare("INSERT INTO quiz(quiz_id,course_id) values(?, ?)");


    $res = $insertQuiz ->execute(array($quiz_id,$course_id));

    if(!$res){
        echo "<script>alert('Ne pare rau, nu s-a putut efectua introducerea testului!')</script>";
    }

    $max_id_question = $conn->prepare("select * from question");
    $max_id_choice = $conn->prepare("select * from question_choices");

    $max_id_question->execute();
    $max_id_choice->execute();

    $maxim_id_q = -1;
    $maxim_id_c = -1;

    while ($result = $max_id_question->fetch()) {
        if ((int)$result["question_id"] > $maxim_id_q) {
            $maxim_id_q = (int)$result["question_id"];
        }
    }

    while ($result = $max_id_choice->fetch()) {
        if ((int)$result["choice_id"] > $maxim_id_c) {
            $maxim_id_c = (int)$result["choice_id"];
        }
    }

    if ($maxim_id_q == -1)
        $question_id = 0;
    else
        $question_id = $maxim_id_q;

    if ($maxim_id_c == -1)
        $choice_id = 0;
    else
        $choice_id = $maxim_id_c;


    $qNumber = 1; // with this we will count the questions, to know at what question we make computations


    $choice = "choice";
    $q = "question";

    while ($qNumber <= 10) {
        $question = $_POST[$q . $qNumber];
        $question_id++;

        $insertQuestion = $conn->prepare("insert into question values(?, ?, ?)");


        $res = $insertQuestion ->execute(array($question_id,$quiz_id,$question));

        if(!$res){
            echo "<script>alert('Ne pare rau, nu s-a putut efectua introducerea intrebarii!')</script>";
        }

        $choiceNumber = 1;

        $correct = "question_" . $qNumber;
        $correctChoice = $_POST[$correct];

        while ($choiceNumber <= 4) {
            $choiceName = $choice . $qNumber . "-" . $choiceNumber;

            $postChoice = $_POST[$choiceName];
            $choice_id++;
            if(strcmp($correctChoice, $postChoice) == 0) {
                $insertChoice = $conn->prepare("insert into question_choices values(?, ?, ?, '1')");
            } else {
                $insertChoice = $conn->prepare("insert into question_choices values(?, ?, ?, '0')");
            }

            $res = $insertChoice->execute(array($choice_id,$question_id,$postChoice));

            if(!$res){
                echo "<script>alert('Ne pare rau, nu s-a putut efectua introducerea variantei de raspuns!')</script>";
            }

            $choiceNumber++;
        }


        $qNumber++;
    }

    echo "<script>alert('Testul a fost adaugat!')</script>";

}



?>