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

$selectQuiz = $conn->prepare("select * from quiz where course_id=?");

$selectQuiz->execute(array($course_id));

$result = $selectQuiz->fetch();

$quiz_id = $result["quiz_id"];

?>
<style>
    label{
        font-size: max(1.4vw, 16px);
        -webkit-text-stroke: 1px black;
    }

    .variants{
        font-size: max(1vw,11px);
        -webkit-text-stroke: 0.2px black;
    }

    .container{

        background: #1F2833;
    }
</style>
<div class="content">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container1">
            <div class="container">
                <div id="formular">
                    <h1 align="center" class="a">Sustinere test</h1>
                    <hr>

                    <?php
                        $selectQuestions = $conn->prepare("select * from question where quiz_id=?");
                        $selectQuestions ->execute(array($quiz_id));

                        $i = 0;
                        while($result = $selectQuestions->fetch()){
                            $name = "choice" . ++$i;
                            echo "<br><label><b> " . $i . ". " . $result["question"]  .  " </b></label>";
                            $question_id = $result["question_id"];
                            $selectChoices = $conn->prepare("select * from question_choices where question_id=?");
                            $selectChoices->execute(array($question_id));


                            while($result2 = $selectChoices->fetch()){
                                echo "<br><input type='radio' name='" . $name . "' value='" . $result2["text"] . "'> <span class='variants'>" . $result2["text"] . "</span>";
                            }
                        }
                    ?>
                </div>
                <hr>
                <button class="submit" type="submit" name="submit">Trimite</button>

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
// setam error reporting pe zero pentru a nu afisa warning-uri pe site in caz ca utilizatorul uita sa bifeze un raspuns la o intrebare
error_reporting(0);
if(isset($_POST["submit"])){
    $selectQuestions = $conn->prepare("select * from question where quiz_id=?");
    $selectQuestions ->execute(array($quiz_id));

    $i = 0;
    $totalPoints = 0;

    while($result = $selectQuestions->fetch()){
        $name = "choice" . ++$i;
        $chosenVariant = $_POST[$name];
        $question_id = $result["question_id"];

        $selectChoices = $conn->prepare("select * from question_choices where question_id=? and text=? and is_correct='1'");
        $selectChoices->execute(array($question_id,$chosenVariant));

        if($selectChoices->rowCount() == 1){
            $totalPoints++;
        }

    }



    echo "<script>alert('Punctajul dumneavoastra este: ". $totalPoints . "/10 !')</script>";

}

