<?php
session_start();
include ("../include/inHeaderAdmin.php");
?>

    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <div class="content">
        <form action="" method="post">
            <div class="container1">
                <div class="container">
                    <h1 align="center" class="a">Stergere curs</h1>
                    <hr>

                    <label for="courseId"><b>ID:</b></label>
                    <input type="text" placeholder="Introduceti id-ul cursului" name="courseId" id="courseId" required>

<br>

                    <label for="adminPassword"><b>Parola:</b></label>
                    <input type="password" placeholder="Introduceti parola" name="adminPassword" id="adminPassword" required >


                    <hr>

                    <button class="submit" type="submit" name="submit">Sterge</button>

                    <button class="reset" type="reset">Reset</button>


                </div>
            </div>
        </form>
    </div>

<?php
include ("../include/footer.php");

if(isset($_POST['submit'])){
    global $conn;
    $admin_id = $_SESSION['admin_id'];

    $admin_pass = $_POST['adminPassword'];

    $verifyPass = "select * from admins where admin_id='$admin_id' and admin_pass='$admin_pass'";
    $runVerify = mysqli_query($conn,$verifyPass);

    if(mysqli_num_rows($runVerify) == 0){
        die("<script>alert('Parola introdusa este gresita!')</script>");
    }

    $courseId = $_POST['courseId'];

    $idLength = strlen($courseId);

    $j = 0;

    try {
        for ($i = 0; $i < $idLength; $i++) {
            $j = $j * 10 + $courseId[$i];
        }
    }
    catch (TypeError $e){
        die("<script>alert('ID-ul cursului trebuie sa fie de tip intreg !')</script>");
    }








    $verifyCourse = "select * from courses where course_id='$courseId'";
    $runVerify = mysqli_query($conn,$verifyCourse);

    if(mysqli_num_rows($runVerify) == 0){
        die("<script>alert('Nu exista un curs cu ID-ul ' + $courseId + ' !')</script>");
    }

    $deleteTexts = "delete from texts where text_course_id='$courseId'";
    $runTexts = mysqli_query($conn, $deleteTexts);

    if(!$runTexts)
    {
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea cursului !')</script>");
    }

    $deleteFiles = "delete from files where file_course_id='$courseId'";
    $runFiles = mysqli_query($conn, $deleteFiles);

    if(!$runFiles){
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea cursului !')</script>");
    }

    $deleteCourse = "delete from courses where course_id='$courseId'";
    $runCourses = mysqli_query($conn, $deleteCourse);

    if(!$runCourses){
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea cursului !')</script>");
    }

    echo "<script>alert('Cursul a fost sters !')</script>";






}
?>