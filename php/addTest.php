<?php
include("../include/inHeaderAdmin.php");
?>

<link rel="stylesheet" type="text/css" href="../css/admin.css">
<div class="content">
        <form action="#" method="post">
            <div class="container1">
                <div class="container">
                    <h1 align="center" class="a">Adaugare test</h1>
                    <hr>

                    <label for="courseId"><b>ID-ul cursului:</b></label>
                    <input type="text" placeholder="Introdu id-ul" name="courseId" required>

                    <label for="question1"><b>Intrebarea 1:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question1" required>

                    <label for="question2"><b>Intrebarea 2:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question2" required>

                    <label for="question3"><b>Intrebarea 3:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question3" required>

                    <label for="question4"><b>Intrebarea 4:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question4" required>

                    <label for="question5"><b>Intrebarea 5:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question5" required>

                    <label for="question6"><b>Intrebarea 6:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question6" required>

                    <label for="question7"><b>Intrebarea 7:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question7" required>

                    <label for="question8"><b>Intrebarea 8:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question8" required>

                    <label for="question9"><b>Intrebarea 9:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question9" required>

                    <label for="question10"><b>Intrebarea 10:</b></label>
                    <input type="text" placeholder="Introdu intrebarea" name="question10" required>
                    <hr>

                    <button class="submit" type="submit" name="submit">Adauga</button>

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
?>