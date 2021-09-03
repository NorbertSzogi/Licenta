
<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("location: ../index.php");
}
global $conn;
include("../include/inHeaderAdmin.php");

?>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<script type="text/javascript" src="../javascript/adminJS.js" > </script>
<div class="content">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container1">
            <div class="container">
                <div id="formular">
                    <h1 align="center" class="a">Adauga curs</h1>
                    <button type="button" onclick="addLabel()">Adauga text/imagine</button>
                    <hr>

                    <label for="titlu"><b>Titlu:</b></label>
                    <input type="text" placeholder="Introdu titlul" name="titlu" >


                    <label for="Fundal"><b>Imagine fundal:</b></label>
                    <input class="white_text" type="file" name="Fundal"  >

                    <label class="texts"><b>Introduceti textul</b></label>
                    <input type="text" placeholder="Introduceti textul" name="text1">

                    <label><b>Introduceti imaginea sau videoclipul</b></label><br>
                    <input class="white_text" type="file" name="file1">

                </div>

                <hr>

                <button class="submit" type="submit" onclick="classNames()" name="submit">Adauga</button>

                <button class="reset" type="reset">Reset</button>



            </div>
        </div>
    </form>
</div>




<?php
if(isset($_POST['submit'])) {
    $identities = $_COOKIE["identities"];

    $title = $_POST['titlu'];

    $postFundal = $_FILES['Fundal'];

    $id_max = "select * from courses";

    $run_id = mysqli_query($conn, $id_max);

    $maxim_id = -1;

    $targetDir = "../uploads/";

    while($result2 = mysqli_fetch_array($run_id))
    {
        if((int)$result2["course_id"] > $maxim_id)
        {
            $maxim_id = (int)$result2["course_id"];
        }
    }

    if($maxim_id == -1) {

        $course_id = "1";

    }
    else{
        $course_id = $maxim_id + 1;
        $course_id = (string)$course_id;

    }

    if($postFundal['name'] !== "") {

        $fileName = "fundal" . $course_id;
        $targetFile = $targetDir . $postFundal['name'];

        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $targetFile = $targetDir . $fileName . "." . $fileType;


        if ($fileType != "jpg" && $fileType != "jpeg" && $fileType == "png" && $fileType == "gif") {
            die("Formatul nu este acceptat.");
        }

        if (move_uploaded_file($postFundal["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($targetFile)) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        if ($fileType == "mp4")
            $fileType = "video";
        else
            $fileType = "image";

    }
    else{
        $targetFile = "0";
        $fileType = "0";
    }


    $insert_course = "insert into courses values('$course_id', '$title', '$targetFile')";
    $run_insert_course = mysqli_query($conn, $insert_course);

    $i = 1;

    $text = "text";
    $file = "file";

    $text_id = "select * from texts";
    $file_id = "select * from files";

    $run_text_id = mysqli_query($conn, $text_id);
    $run_file_id = mysqli_query($conn, $file_id);

    $maxim_text_id = -1;
    $maxim_file_id = -1;

    while($result = mysqli_fetch_array($run_text_id)){
        if((int)$result["text_id"] > $maxim_text_id)
        {
            $maxim_text_id = (int)$result["text_id"];
        }
    }

    while($result = mysqli_fetch_array($run_file_id)){
        if((int)$result["file_id"] > $maxim_file_id)
        {
            $maxim_file_id = (int)$result["file_id"];
        }
    }

    if($maxim_text_id == -1)
        $text_id = 0;
    else
        $text_id = $maxim_text_id;

    if($maxim_file_id == -1)
        $file_id = 0;
    else
        $file_id = $maxim_file_id;




    //error_reporting(0);




    while($i <= $identities){
        $postText = $_POST[$text.$i];
        $postFile = $_FILES[$file.$i];

        // introducing text in database
        $text_id++;

        $insertText = "insert into texts values('$text_id', '$course_id', '$postText')";
        $run_insert_text = mysqli_query($conn, $insertText);



        //introducing the file in the database

        if($postFile['name'] !== "") {

            $fileName = $file . (++$file_id);
            $targetFile = $targetDir . $postFile['name'];

            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $targetFile = $targetDir . $fileName . "." . $fileType;


            if ($fileType != "jpg" && $fileType != "jpeg" && $fileType == "png" && $fileType == "gif" && $fileType != "mp4") {
                die("Formatul nu este acceptat.");
            }

            if (move_uploaded_file($postFile["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($targetFile)) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }

            if ($fileType == "mp4")
                $fileType = "video";
            else
                $fileType = "image";

        }
        else{
            $file_id++;
            $targetFile = "0";
            $fileType = "0";
        }

        $insertFile = "insert into files values('$file_id', '$course_id', '$targetFile', '$fileType')";

        $run_insert_file = mysqli_query($conn, $insertFile);




        $i++;
    }



    echo "<script>alert('Cursul a fost adaugat!')</script>";



}
?>
<br><br><br><br><br><br>

<?php
include("../include/footer.php");
?>

