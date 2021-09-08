<?php
session_start();
global $conn;

if(isset($_SESSION["admin_id"])){
    include("../include/inHeaderAdmin.php");
    $session_id = $_SESSION['admin_id'];
    $query = $conn->prepare("SELECT * FROM admins WHERE admin_id=?");
    $query->execute(array($session_id));
}else{
    if(isset($_SESSION["user_id"])){
        include("../include/inHeaderUser.php");
        $session_id = $_SESSION['user_id'];
        $query = $conn->prepare("SELECT * FROM users WHERE user_id=?");
        $query->execute(array($session_id));
    }
    else{
        header("location: ../index.php");
    }
}


$res = $query->fetch();

$first_name = $res['first_name'];
$last_name = $res['last_name'];
$email = $res['email'];
$pass = $res['pass'];
$username = $res['username'];


?>



<title>Editeaza profilul</title>


<script type="text/javascript" src="../javascript/adminJS.js" > </script>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<style>
    td{
        font-weight: bold;
    }
</style>


<div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table table-bordered table-hover">
                <tr align="center">
                    <td colspan="6" class="active"><h2>Editeaza profilul</h2>
                <tr>
                    <td>Nume
                    <td><input class="form-control" type="text" name="first_name" required value="<?php echo $first_name; ?>">
                <tr>
                    <td>Prenume
                    <td><input class="form-control" type="text" name="last_name" required value="<?php echo $last_name; ?>">
                <tr>
                    <td>Username
                    <td><input class="form-control" type="text" name="username" required value="<?php echo $username; ?>">
                <tr>
                    <td>Parola
                    <td><input class="form-control" type="password" name="pass" id="mypass" required value="<?php echo $pass; ?>">
                        <input type="checkbox" onclick="show_password()"><strong>Arata parola</strong>
                <tr>
                    <td>E-mail
                    <td><input class="form-control" type="email" name="email" required value="<?php echo $email; ?>">

                <tr align="center">
                    <td colspan="6">
                        <input type="submit" class="btn btn-info" name="update" style="width: 250px;" value="Editeaza">


            </table>
        </form>

    </div>

</div>



<?php

if(isset($_POST['update'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email2 = $_POST['email'];

    $check_email1 = $conn->prepare("select * from admins where email=?");
    $check_email2 = $conn->prepare("select * from users where email=?");

    $check_email1 ->execute(array($email2));
    $check_email2 ->execute(array($email2));

    $rows1 = $check_email1->rowCount();
    $rows2 = $check_email2->rowCount();

    if($email != $email2) {
        if ($rows1 == 1 or $rows2 == 1) {

            //va urma
            die("<script>alert('Ne pare rau, email ul este deja folosit!')</script>");
        }
    }

    if(isset($_SESSION["admin_id"])){
        $update = $conn->prepare("UPDATE admins SET first_name=?, last_name=?,  email=?, pass=?, username=? WHERE admin_id=?");
    }else{
        if(isset($_SESSION["user_id"])){
            $update = $conn->prepare("UPDATE users SET first_name=?, last_name=?,  email=?, pass=?, username=? WHERE user_id=?");
        }
    }

    $res = $update->execute(array($first_name,$last_name,$email2,$pass,$username,$session_id));


    if($res){
        echo "<script>alert('Datele dumneavoastra au fost schimbate')</script>";
    }
    else{
        echo "<script>alert('Ne pare rau, nu s-a putut face update')</script>";

    }
    echo "<script>window.open('editProfile.php', '_self')</script>";

}
include("../include/footer.php");
