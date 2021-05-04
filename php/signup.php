<?php
    include("../include/outHeader.php");

?>

<link rel="stylesheet" type="text/css" href="/Licenta/css/signup.css">
<div class="content">
<form name="form1" action="" method="post">
    <div class="container1">
        <div class="container">
            <h1 align="center" class="a">Inregistrare</h1>
            <hr>

            <p class="user_type"><input type="radio" onclick="userType(this);" name="userTypeAuth" value="administrator" >Administrator</p>
            <br>
            <p class="user_type"><input type="radio" onclick="userType(this);" name="userTypeAuth" value="utilizator" checked>Utilizator</>

            <br>
            <br>
            <br>

            <label for="nume"><b>Nume:</b></label>
            <input type="text" placeholder="Introdu numele" name="first_name"  id="first_name" required>

            <label for="prenume"><b>Prenume:</b></label>
            <input type="text" placeholder="Introdu prenumele" name="last_name" id="last_name" required >

            <label for="e-mail"><b>E-mail:</b></label>
            <input type="text" placeholder="Introdu e-mail" name="email" required>

            <label for="pass"><b>Parola:</b></label>
            <input type="password" placeholder="Introduceti parola" name="password" required>

            <label for="pass2"><b>Reintroduceti parola:</b></label>
            <input type="password" placeholder="Introduceti parola" name="password2" required>

            <div id="security_passwords" hidden>
                <label for="pass2"><b>Parola de securitate 1:</b></label>
                <input type="password" placeholder="Introduceti parola" name="sec_pass1" id="sec_pass1">

                <label for="pass2"><b>Parola de securitate 2:</b></label>
                <input type="password" placeholder="Introduceti parola" name="sec_pass2" id="sec_pass2">

                <label for="pass2"><b>Parola de securitate 3:</b></label>
                <input type="password" placeholder="Introduceti parola" name="sec_pass3" id="sec_pass3">
            </div>

            <hr>

            <button class="submit" type="submit" name="submit" onclick="return validari(document.form1.email)">Trimite</button>

            <button class="reset" type="reset">Sterge</button>
            <br>
            <br>
            <br>


        </div>
    </div>
</form>

</div>

<br>
<br>
<br>
<br>
<br>
<br>


<?php

include("../include/footer.php");

?>

</body>
<script>

    function validari(inputText)
    {
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var pass1 = document.form1.password.value;
        var pass2 = document.form1.password2.value;

        if(inputText.value.match(mailformat) && pass1.toString() == pass2.toString())
        {
            return true;
        }
        else
        {
            if(!inputText.value.match(mailformat))
            {
                alert("Ati introdus o adresa de e-mail gresita!");
                document.form1.email.focus();
            }

            if(pass1.toString() != pass2.toString())
            {
                alert("Parolele nu corespund!");
                document.form1.password.focus();
            }

            return false;
        }


    }

    function userType(radioButton){
        var x = radioButton.value;

        if(x == "administrator"){
            document.getElementById("security_passwords").removeAttribute("hidden");
            document.getElementById("sec_pass1").setAttribute("required","");
            document.getElementById("sec_pass2").setAttribute("required","");
            document.getElementById("sec_pass3").setAttribute("required","");
        }
        if(x == "utilizator"){
            document.getElementById("security_passwords").setAttribute("hidden","");
            document.getElementById("sec_pass1").removeAttribute("required");
            document.getElementById("sec_pass2").removeAttribute("required");
            document.getElementById("sec_pass3").removeAttribute("required");
        }
    }
    
</script>

</html>

<?php

if(isset($_POST["submit"]))
{
    global $conn;
    $userType = $_POST["userTypeAuth"];
    if($userType == "administrator")
    {

        $pass1 = $_POST["sec_pass1"];
        $pass2 = $_POST["sec_pass2"];
        $pass3 = $_POST["sec_pass3"];

        $verify_pass = "SELECT * FROM passwords WHERE pass1=$pass1 AND pass2=$pass2 AND pass3=$pass3";

        $run_pass = mysqli_query($conn,$verify_pass);

        $result = mysqli_fetch_array($run_pass);

        if($result == NULL)
        {
            die("Parolele de securitate nu corespund!");

            //va urma
            //echo "<script> window.open('security_failed.php', '_self') </script>";
        }
        else{
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $id_max = "select * from admins";

            $run_id = mysqli_query($conn, $id_max);

            $maxim_id = -1;

            while($result2 = mysqli_fetch_array($run_id))
            {
                 if((int)$result2["admin_id"] > $maxim_id)
                 {
                     $maxim_id = (int)$result2["admin_id"];
                 }
            }

            echo $maxim_id;

            if($maxim_id == -1){

                $admin_id = "1";
                $username = $first_name . "_" . $last_name . "_" . $admin_id;

                $insert_admin = "insert into admins values('$admin_id', '$first_name', '$last_name', '$email', '$password', '$username')";

                $run_insert = mysqli_query($conn, $insert_admin);

                echo "Felicitari, ati fost introdus in baza de date";
                // echo username ul tau este

                //va urma
                //echo "<script> window.open('admin_insert_succes.php', '_self') </script>";


            }
            else{
                $admin_id = $maxim_id + 1;
                $admin_id = (string)$admin_id;
                $username = $first_name . "." . $last_name . "." . $admin_id;



                $insert_admin = "insert into admins values('$admin_id','$first_name','$last_name','$email','$password','$username')";

                $run_insert = mysqli_query($conn, $insert_admin);

                echo "Felicitari, ati fost introdus in baza de date";
                //echo username ul tau este

                //va urma
                //echo "<script> window.open('admin_insert_succes.php', '_self') </script>";
            }
        }


    }

    if($userType == "utilizator"){
        //...
    }
}

?>