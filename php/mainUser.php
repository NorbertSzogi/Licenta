<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("location: ../index.php");
}

include("../include/inHeaderUser.php");



?>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<div class="content">

    <div class="gallery">
        <a href="editProfile.php">
            <img src="../images/profil.png" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Editeaza profilul</div>
    </div>



    <div class="gallery">
        <a href="#">
            <img src="../images/teste.jpg" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Alege test</div>
    </div>

    <div class="gallery">
        <a href="viewCourses.php">
            <img src="../images/cursuri.png" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Vizualizeaza cursuri</div>
    </div>





</div>

<?php
include("../include/footer.php");
?>
