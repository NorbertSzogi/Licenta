<?php
session_start();
global $conn;
include("../include/inHeaderAdmin.php");
$ad_id = $_SESSION['admin_id'];

$query = "SELECT * FROM admins WHERE admin_id='$ad_id'";
$run = mysqli_query($conn,$query);

$res = mysqli_fetch_array($run);

$admin_id = $res['admin_id'];
$first_name = $res['first_name'];
$last_name = $res['last_name'];
$admin_email = $res['admin_email'];
$admin_pass = $res['admin_pass'];
$username = $res['username'];


?>



<title>Editeaza profilul</title>


<script type="text/javascript" src="../javascript/adminJS.js" > </script>


<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table table-bordered table-hover">
                <tr align="center">
                    <td colspan="6" class="active"><h2>Editeaza profilul</h2>
                <tr>
                    <td style="font-wight: bold;">Nume
                    <td><input class="form-control" type="text" name="first_name" required value="<?php echo $first_name; ?>">
                <tr>
                    <td style="font-wight: bold;">Prenume
                    <td><input class="form-control" type="text" name="last_name" required value="<?php echo $last_name; ?>">
                <tr>
                    <td style="font-wight: bold;">Username
                    <td><input class="form-control" type="text" name="username" required value="<?php echo $username; ?>">
                <tr>
                    <td style="font-wight: bold;">Parola
                    <td><input class="form-control" type="password" name="admin_pass" id="mypass" required value="<?php echo $admin_pass; ?>">
                        <input type="checkbox" onclick="show_password()"><strong>Arata parola</strong>
                <tr>
                    <td style="font-wight: bold;">E-mail
                    <td><input class="form-control" type="email" name="admin_email" required value="<?php echo $admin_email; ?>">

                <tr align="center">
                    <td colspan="6">
                        <input type="submit" class="btn btn-info" name="update" style="width: 250px;" value="Editeaza">


            </table>
        </form>

    </div>
    <div class="col-sm-2">
    </div>
</div>


<?php

if(isset($_POST['update'])){
    $first_name = htmlentities($_POST['first_name']);
    $last_name = htmlentities($_POST['last_name']);
    $username = htmlentities($_POST['username']);
    $admin_pass = htmlentities($_POST['admin_pass']);
    $admin_email2 = htmlentities($_POST['admin_email']);

    $check_email1 = "select * from admins where admin_email='$admin_email2'";
    $check_email2 = "select * from users where user_email='$admin_email2'";
    $run1 = mysqli_query($conn,$check_email1);
    $run2 = mysqli_query($conn,$check_email2);

    $rows1 = mysqli_num_rows($run1);
    $rows2 = mysqli_num_rows($run2);

    if($admin_email != $admin_email2) {
        if ($rows1 == 1 or $rows2 == 1) {

            //va urma
            die("Ne pare rau, email ul este deja folosit!");
        }
    }

    $update = "UPDATE admins SET first_name='$first_name', last_name='$last_name',  admin_email='$admin_email2', admin_pass='$admin_pass', username='$username' WHERE admin_id='$admin_id'";



    $run = mysqli_query($conn,$update);

    if($run){
        echo "<script>alert('Datele dumneavoastra au fost schimbate')</script>";

        echo "<script>window.open('editProfileAdmin.php', '_self')</script>";
    }
    else{
        echo "<script>alert('Ne pare rau, nu s-a putut face update')</script>";

        echo "<script>window.open('editProfileAdmin.php', '_self')</script>";
    }

}
include("../include/footer.php");
