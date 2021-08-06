<?php
include ("../include/inHeaderAdmin.php");
?>

    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <div class="content">
        <form action="#" method="post">
            <div class="container1">
                <div class="container">
                    <h1 align="center" class="a">Stergere curs</h1>
                    <hr>

                    <label for="email"><b>ID:</b></label>
                    <input type="text" placeholder="Introdu id-ul" name="id" required>

                    <label for="password"><b>Parola:</b></label>
                    <input type="password" placeholder="Introdu parola" name="coursePassword" required >

                    <hr>

                    <button class="submit" type="submit" name="submit">Sterge</button>

                    <button class="reset" type="reset">Reset</button>


                </div>
            </div>
        </form>
    </div>

<?php
include ("../include/footer.php");
?>