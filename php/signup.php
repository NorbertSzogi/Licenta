<?php
    include("outHeader.php");
?>

<link rel="stylesheet" type="text/css" href="/Licenta/css/signup.css">
<form name="form1" action="#programari.php" method="post">
    <div class="container1">
        <div class="container">
            <h1 align="center" class="a">Inregistrare</h1>
            <hr>

            <label for="nume"><b>Nume:</b></label>
            <input type="text" placeholder="Introdu numele" name="nume"  id="nume" required>

            <label for="prenume"><b>Prenume:</b></label>
            <input type="text" placeholder="Introdu prenumele" name="prenume" id="prenume" required >

            <label for="e-mail"><b>E-mail:</b></label>
            <input type="text" placeholder="Introdu e-mail" name="email" required>

            <label for="pass"><b>Parola:</b></label>
            <input type="password" placeholder="Introduceti parola" name="password" required>

            <label for="pass2"><b>Reintroduceti parola:</b></label>
            <input type="password" placeholder="Introduceti parola" name="password2" required>

            <button class="submit" type="submit" onclick="return validari(document.form1.email)">Trimite</button>

            <button class="reset" type="reset">Sterge</button>

        </div>
    </div>
</form>

<br>
<br>
<br>
<br>
<br>
</body>
<script>

    function validari(inputText)
    {
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var pass1 = document.form1.password.value;
        var pass2 = document.form1.password2.value;

        if(inputText.value.match(mailformat) && pass1.toString() == pass2.toString())
        {
            document.form1.email.focus();
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
    
</script>

</html>