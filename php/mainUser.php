<!DOCTYPE html>
<?php
session_start();
include("../include/inHeaderUser.php");
if(!isset($_SESSION['user_email'])){
    header("location: ../index.php");
}

$user_email = $_SESSION["user_email"];

?>
<title>Home</title>
<div class="content">
    <?php


        echo $user_email;

    ?>
</div>

<?php
include("../include/footer.php");
?>
