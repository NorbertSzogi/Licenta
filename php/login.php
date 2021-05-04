<?php
session_start();
include("../include/outHeader.php");
?>

<link rel="stylesheet" type="text/css" href="../css/signup.css">
<div class="content">
<form action="" method="post">
    <div class="container1">
        <div class="container">
            <h1 align="center" class="a">Autentificare</h1>
            <hr>

            <label for="email"><b>Email:</b></label>
            <input type="text" placeholder="Introdu email-ul" name="email" required>

            <label for="password"><b>Parola:</b></label>
            <input type="password" placeholder="Introdu parola" name="password" required >

            <hr>

            <button class="submit" type="submit" name="submit">Login</button>

            <button class="reset" type="reset">Sterge</button>


            <br>
        </div>
    </div>
</form>
</div>
<?php

include("../include/footer.php");

if(isset($_POST["submit"]))
{
    global $conn;

    $email = $_POST["email"];
    $password = $_POST["password"];

    $check_user = "select * from users where user_email='$email' AND user_pass='$password'";
    $check_admin = "select * from admins where admin_email='$email' AND admin_pass='$password'";

    $run_user = mysqli_query($conn,$check_user);

    $rows_user = mysqli_num_rows($run_user);

    if($rows_user == 1){
        $_SESSION['user_email'] = $email;
        $result = mysqli_fetch_array($run_user);

        $user_id = $result["user_id"];
        echo "<script>alert('USER');</script>";
        echo "<script>window.open('/Licenta/php/mainUser.php', '_self')</script>";
    }

    $run_admin = mysqli_query($conn,$check_admin);

    $rows_admin = mysqli_num_rows($run_admin);

    if($rows_admin == 1){
        $_SESSION['admin_email'] = $email;
        $result = mysqli_fetch_array($run_admin);

        $admin_id = $result["admin_id"];

        echo "<script>alert('ADMIN');</script>";
        echo "<script>window.open('/Licenta/php/mainAdmin.php', '_self')</script>";
    }

    if($rows_user != 1 and $rows_admin != 1)
    {
        echo "<script>alert('Credentiale gresite');</script>";
    }


}

?>

