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

$selectQuiz = "select * from quiz where quiz_course_id='$course_id'";

$runQuiz = mysqli_query($conn, $selectQuiz);

$result = mysqli_fetch_array($runQuiz);

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
                        $selectQuestions = "select * from question where quiz_id='$quiz_id'";
                        $runQuestions = mysqli_query($conn, $selectQuestions);
                        $i = 0;
                        while($result = mysqli_fetch_array($runQuestions)){
                            $name = "choice" . ++$i;
                            echo "<br><label><b> " . $i . ". " . $result["question"]  .  " </b></label>";
                            $question_id = $result["question_id"];
                            $selectChoices = "select * from question_choices where question_id='$question_id'";
                            $runChoices = mysqli_query($conn, $selectChoices);

                            while($result2 = mysqli_fetch_array($runChoices)){
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
