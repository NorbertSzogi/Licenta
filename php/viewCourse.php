<?php

session_start();


if(!isset($_SESSION['admin_id'])) {
    if(!isset($_SESSION['user_id']))
        header("location: ../index.php");
    include("../include/inHeaderUser.php");
    $session_id = $_SESSION["user_id"];
    $author = "user";
}
else{
    include("../include/inHeaderAdmin.php");
    $session_id = $_SESSION["admin_id"];
    $author = "admin";
}
?>
<link rel='stylesheet' type='text/css' href='../css/admin.css'>

<style>
    img.image{
       max-width: 80%;
    }
    hr{
        border: 1px solid black;
    }
</style>

<div class='all_courses'>
<?php

global $conn;

$course_id = $_GET["course_id"];

$select_course = $conn->prepare("select * from courses where course_id=?");
$select_course->execute(array($course_id));

$course = $select_course->fetch();
echo "<h2 class='title'>" . $course["title"] . "</h2><hr>";
$select_texts = $conn->prepare("select * from texts where course_id=?");
$select_texts ->execute(array($course_id));

$select_files = $conn->prepare("select * from files where course_id=?");
$select_files ->execute(array($course_id));

while($texts = $select_texts->fetch() and $files = $select_files->fetch()){
    if(strcmp($texts['text'],"") != 0){
        echo  "<br>" . $texts['text'];
    }
    if(strcmp($files['reference'],"0") != 0) {
        if(strcmp($files['type'],"video") == 0){
            echo "<br><br><video class='video' controls><source src='" . $files['reference'] . "' type='video/mp4'/> </video><br>";
        }
        else {
            echo "<br><br><img class='image' alt='" . $files['reference'] . "' src='" . $files['reference'] . "' width='600' height='400'/><br>";
        }
    }
}
?>
<br><br><br>
</div>
<style>
    .container {
        max-width: 640px;
        margin: 30px auto;
        background: #fff;
        border-radius: 8px;
        padding: 20px;
    }

    .comment {
        display: block;
        transition: all 1s;
    }

    .container textarea {
        width: 100%;
        border: none;
        background: #E8E8E8;
        padding: 5px 10px;
        height: 50%;
        border-radius: 5px 5px 0 0;
        border-bottom: 2px solid #016BA8;
        transition: all 0.5s;
        margin-top: 15px;
    }

    button.primaryContained {
        background: #016ba8;
        color: #fff;
        padding: 10px 10px;
        border: none;
        margin-top: 0;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 4px;
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.25);
        transition: 1s all;
        font-size: 10px;
        border-radius: 5px;
    }
</style>




    <section id="app">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="comment">
                        <hr>
                        <?php
                            $select_comments = $conn->prepare("select * from comments where course_id=? order by 1 desc");
                            $select_comments->execute(array($course_id));

                            while($comment=$select_comments->fetch()){
                                if(strcmp($comment["author"],"admin") == 0){
                                    $table = "admins";
                                    $id_type = "admin_id";
                                }
                                else{
                                    $table="users";
                                    $id_type = "user_id";
                                }

                                $select_user = $conn->prepare("select * from " . $table . " where " . $id_type . "=?");
                                $select_user->execute(array($comment["user_id"]));
                                $user = $select_user->fetch();
                                $commented = $user["first_name"] . " " . $user["last_name"];


                                echo "<p>" . $commented . " a comentat in " . $comment["date"];
                                echo "<br><br>";
                                echo $comment["text"];
                                echo "<hr>";

                            }

                        ?>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <form method="post" action="">
                        <textarea class="input" placeholder="Scrie un comentariu" name="comment"></textarea>
                        <button class='primaryContained' type="submit" name="submit">Adauga comentariu</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php
date_default_timezone_set("Europe/Bucharest");
if(isset($_POST["submit"])){

    $text = $_POST["comment"];
    $date = date("y-m-D H:i:s");

    $insertComment = $conn->prepare("insert into comments(course_id,user_id,text,author) values(?,?,?,?)");

    $res = $insertComment->execute(array($course_id,$session_id,$text,$author));

    if(!$res)
    {
        echo "<script>alert('Ne pare rau, comentariul nu a putut fi adaugat, va rugam sa reveniti mai tarziu!')</script>";
    }
}

    include("../include/footer.php");
?>

