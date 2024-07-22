<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Шумкин А.Ю.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9">
                    <div class="nav_text">Коротко обо мне!</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Шумкин Александр Юрьевич, стажер по веб-пентесту. Активно решаю portswigger. Победить ctf соревнований</h2>
            </div>
            <div class="col-4">
                <div class="row my_photo"></div>
                <div class="row title_photo"><p>Шумкин А.Ю.</p></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">Привет, <?php echo $_COOKIE['User']; ?></h1>
            </div>
        </div>
        <div class="row">    
            <div class="col-12">
                <form method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
                    <input type="text" class="form" type="text" name="title" placeholder="Загаловок вашего поста">
                    <textarea type="text" cols="30" rows="10" class="form" name="text" placeholder="Введите текст вашего поста"></textarea>
                    <input type="file" name="file" /><br>
                    <button type="submit" class="btn_red" name="submit">Сохраните пост!</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>

<?php
    require_once('db.php');

    $link = mysqli_connect('127.0.0.1', 'root', 'Globalelite228', 'first');
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $main_text = $_POST['text'];
        if (!$title || !$main_text) die ("Заполните все поля");
        $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
        if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");

        if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
    }
    
?>