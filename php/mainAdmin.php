<!DOCTYPE html>
<?php
session_start();
include("../include/inHeaderAdmin.php");
if(!isset($_SESSION['admin_email'])){
    header("location: ../index.php");
}
?>
<title>Home</title>
<div class="content">
    <?php
        echo "admin\n";
        $admin_email = $_SESSION["admin_email"];
        echo $admin_email;
    ?>
</div>

<?php
include("../include/footer.php");
?>
