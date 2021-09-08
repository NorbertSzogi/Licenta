<?php
session_start();
include ("../include/inHeaderAdmin.php");
include ("functions.php");
?>
    <script type="text/javascript" src="../javascript/adminJS.js" > </script>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <div class="content">
        <form action="" method="post" name="form1">
            <div class="container1">
                <div class="container">
                    <h1 align="center" class="a">Stergere curs</h1>
                    <hr>

                    <label for="courseId"><b>ID-ul cursului:</b></label>
                    <input type="text" placeholder="Introduceti id-ul cursului" name="courseId" id="courseId" required>

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
include ("../include/footer.php");

if(isset($_POST['submit'])){
    global $conn;

    $admin_pass = $_POST['adminPassword'];

    $courseId = $_POST['courseId'];

    deleteTest($courseId,$admin_pass);

    $verifyCourse = $conn->prepare("select * from courses where course_id=?");


    $verifyCourse ->execute(array($courseId));

    if($verifyCourse->rowCount() == 0){
        die("<script>alert('Nu exista un curs cu ID-ul ' + $courseId + ' !')</script>");
    }

    $deleteTexts = $conn->prepare("delete from texts where course_id=?");

    $res = $deleteTexts->execute(array($courseId));


    if(!$res)
    {
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea textelor !')</script>");
    }

    $selectFiles =$conn->prepare("select * from files where course_id=?");
    $selectFiles->execute(array($courseId));

    while ($result=$selectFiles->fetch()){
        if(strcmp($result["reference"], "0") != 0)
            unlink($result["reference"]);
    }

    $deleteFiles = $conn->prepare("delete from files where course_id=?");

    $res = $deleteFiles->execute(array($courseId));

    if(!$res){
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea fisierelor !')</script>");
    }

    $selectCourse = $conn->prepare("select * from courses where course_id=?");

    $selectCourse ->execute(array($courseId));


    $result= $selectCourse->fetch();
    if(strcmp($result["image"], "0") != 0)
        unlink($result["image"]);

    $deleteCourse = $conn->prepare("delete from courses where course_id=?");

    $res = $deleteCourse ->execute(array($courseId));


    if(!$res){
        die("<script>alert('Ne pare rau, nu s-a putut efectua stergerea cursului !')</script>");
    }

    echo "<script>alert('Cursul a fost sters !')</script>";






}
?>