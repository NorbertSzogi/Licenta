<?php
session_start();
include("../include/outHeader.php");
?>

<link rel="stylesheet" type="text/css" href="../css/admin.css">
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

    $check_user = $conn->prepare("select * from users where email=? AND pass=?");
    $check_admin = $conn->prepare("select * from admins where email=? AND pass=?");

    $check_user ->execute(array($email,$password));
    $check_admin ->execute(array($email,$password));

    $rows_user = $check_user->rowCount();

    if($rows_user == 1){

        $result = $check_user->fetch();
        $_SESSION['user_id'] = $result['user_id'];

        $user_id = $result["user_id"];
        echo "<script>window.open('mainUser.php', '_self')</script>";
    }


    $rows_admin = $check_admin->rowCount();

    if($rows_admin == 1){

        $result = $check_admin->fetch();
        $_SESSION['admin_id'] = $result['admin_id'];

        $admin_id = $result["admin_id"];

        echo "<script>window.open('mainAdmin.php', '_self')</script>";
    }

    if($rows_user != 1 and $rows_admin != 1)
    {
        echo "<script>alert('Credentiale gresite');</script>";
    }


}

?>

