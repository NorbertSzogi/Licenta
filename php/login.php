<?php
include("outHeader.php");
?>

<link rel="stylesheet" type="text/css" href="/Licenta/css/signup.css">
<div class="content">
<form action="#" method="post">
    <div class="container1">
        <div class="container">
            <h1 align="center" class="a">Autentificare</h1>
            <hr>

            <label for="nume"><b>Nume:</b></label>
            <input type="text" placeholder="Introdu numele" name="nume"  id="nume" required>

            <label for="parola"><b>Parola:</b></label>
            <input type="password" placeholder="Introdu parola" name="password" id="password" required >

            <hr>

            <button class="submit" type="submit">Login</button>

            <button class="reset" type="reset">Sterge</button>


            <br>
        </div>
    </div>
</form>
</div>
<?php

include("footer.php");

?>

