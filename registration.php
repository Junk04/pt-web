<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Шумкин А.Ю.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css?v=1">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Регистрация</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="">
                    <div class="row form_reg"><input class="form" type="email" name="email" placeholder="Email"></div>
                    <div class="row form_reg"><input class="form" type="text" name="login" placeholder="Login"></div>
                    <div class="row form_reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                    <button type="submit" class="btn_red btn_reg" name="submit">Продолжить</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
require_once('db.php');
// Подключение к базе данных
$link = mysqli_connect('127.0.0.1', 'root', 'Globalelite228', 'first');

if (isset($_COOKIE['User'])) {
    header("Location: login.php");
}
// Включаем вывод всех ошибок


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['login'];
    $pass = $_POST['password'];

    if (!$email || !$username || !$pass) {
        die('Пожалуйста, введите все значения!');
    }

    $sql = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$pass')";
    if (!mysqli_query($link, $sql)) {
        echo "Не удалось добавить пользователя: " . mysqli_error($link);
    } else {
        echo "Пользователь успешно добавлен!";
    }
}

mysqli_close($link);
?>
