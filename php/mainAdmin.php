<!DOCTYPE html>
<?php
session_start();
include("../include/inHeaderAdmin.php");
if(!isset($_SESSION['admin_id'])){
    header("location: ../index.php");
}
?>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<body>
<div class="content">





    <div class="gallery">
        <a href="addCourse.php">
            <img src="../images/adaugaCurs.jpg"" alt="Adauga curs" width="600" height="400">
        </a>
        <div class="desc">Adauga curs </div>
    </div>

    <div class="gallery">
        <a href="deleteCourse.php">
            <img src="../images/stergere.jpg" alt="Sterge curs" width="600" height="400">
        </a>
        <div class="desc">Sterge curs</div>
    </div>


    <div class="gallery">
        <a href="editProfileAdmin.php">
            <img src="../images/profil.png" alt="Editeaza profilul" width="600" height="400">
        </a>
        <div class="desc">Editeaza profilul</div>
    </div>



    <div class="gallery">
        <a href="addTest.php">
            <img src="../images/teste.jpg" alt="Adauga teste" width="600" height="400">
        </a>
        <div class="desc">Adauga teste</div>
    </div>

    <div class="gallery">
        <a href="#">
            <img src="../images/teste.jpg" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Alege test</div>
    </div>

    <div class="gallery">
        <a href="viewCourses.php">
            <img src="../images/cursuri.png" alt="Vizualizeaza cursuri" width="600" height="400">
        </a>
        <div class="desc">Vizualizeaza cursuri</div>
    </div>






</div>

</body>
<?php
include("../include/footer.php");
?>
