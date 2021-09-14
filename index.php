<?php
include("include/outHeader.php");
?>


<head>
	<title>Auto Learn</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}


        .active {
            background-color: #717171;
        }



    </style>



</head>



<body>

<div class="content">


    <div class="slideshow-container">

        <div class="mySlides fade">
            <img class="slideshow" src="images/fundalUser.jpg" style="width:100%">
            <div class="text">Meniul principal</div>
        </div>

        <div class="mySlides fade">
            <img class="slideshow" src="images/editProfile.png" style="width:100%">
            <div class="text">Editarea profilului</div>
        </div>

        <div class="mySlides fade">
            <img class="slideshow" src="images/veziCurs.png" style="width:100%">
            <div class="text">Vizualizarea unui curs</div>
        </div>

        <div class="mySlides fade">
            <img class="slideshow" src="images/test2.jpg" style="width:100%">
            <div class="text">Sustinerea unui test</div>
        </div>

        <div class="mySlides fade">
            <img class="slideshow" src="images/addComent.png" style="width:100%">
            <div class="text">Adaugarea unui comentariu</div>
        </div>




    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>

    </div>


    <table class="sectiune">
        <tr class="rand1">
            <th colspan="2" class="titlu">Auto Learn</th>
        </tr>
        <tr>
            <td class="coloana_stanga">
                <p class="indent">Auto Learn este o aplicatie care vine in ajutorul celor care doresc sa acumuleze aptitudini
                    si informatii noi despre autovehicule.
                <p class="indent">Auto Learn este o aplicatie usor de utilizat, intuitiva, care faciliteaza invatarea mecanicii,
                    existand posibilitatea de a citi si urmari multe cursuri cu informatii despre intretinerea
                    autovehiculelor, metodele de schimbare a anumitor piese ale acestora, precum si multe altele.
                <p class="indent">Urmarind informatiile de pe Auto Learn, veti cunoaste problemele autovehiculului dumneavoastra chiar inainte
                    de a merge la un service specializat, folosindu-va cunostintele acumulate. </p>
            </td>
            <td class="coloana_dreapta">
                <ul>
                    <li>Posibilitatea de invatare din cursuri bine structurate</li>
                    <li>Cursuri insotite de suport vizual, atat imagini cat si videoclipuri</li>
                    <li>Testarea cunostintelor acumulate</li>
                    <li>Posibilitatea de editare a informatiilor contului personal</li>
                </ul>

            </td>
        </tr>
    </table>

</div>

<?php
include("include/footer.php");
?>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
</script>



</body>
