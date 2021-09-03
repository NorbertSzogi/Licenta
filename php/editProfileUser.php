<?php

session_start();
include("../include/inHeaderUser.php");
$user_id = $_SESSION['user_id'];
global $conn;

$query = "SELECT * FROM users WHERE user_id='$user_id'";
$run = mysqli_query($conn,$query);

$res = mysqli_fetch_array($run);

$user_id = $res['user_id'];
$first_name = $res['first_name'];
$last_name = $res['last_name'];
$user_email = $res['user_email'];
$user_pass = $res['user_pass'];
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
                    <td><input class="form-control" type="password" name="user_pass" id="mypass" required value="<?php echo $user_pass; ?>">
                        <input type="checkbox" onclick="show_password()"><strong>Arata parola</strong>
                <tr>
                    <td style="font-wight: bold;">E-mail
                    <td><input class="form-control" type="email" name="user_email" required value="<?php echo $user_email; ?>">

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
    $user_pass = htmlentities($_POST['user_pass']);
    $user_email2 = htmlentities($_POST['user_email']);


    $check_email1 = "select * from admins where admin_email='$user_email2'";
    $check_email2 = "select * from users where user_email='$user_email2'";
    $run1 = mysqli_query($conn,$check_email1);
    $run2 = mysqli_query($conn,$check_email2);

    $rows1 = mysqli_num_rows($run1);
    $rows2 = mysqli_num_rows($run2);

    if($user_email != $user_email2) {
        if ($rows1 == 1 or $rows2 == 1) {

            //va urma
            die("Ne pare rau, email ul este deja folosit!");
        }
    }

    $update = "UPDATE users SET first_name='$first_name', last_name='$last_name',  user_email='$user_email2', user_pass='$user_pass', username='$username' WHERE user_id='$user_id'";



    $run = mysqli_query($conn,$update);

    if($run){
        echo "<script>alert('Datele dumneavoastra au fost schimbate')</script>";

        echo "<script>window.open('editProfileUser.php', '_self')</script>";
    }
    else{
        echo "<script>alert('Ne pare rau, nu s-a putut face update')</script>";

        echo "<script>window.open('editProfileUser.php', '_self')</script>";
    }

}

include("../include/footer.php");
?>

