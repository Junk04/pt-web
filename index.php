<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Шумкин А.Ю.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 index">
                <h1>Авторизуйтесь!</h1>
                <?php
                if (!isset($_COOKIE['User'])) {
                    ?>
                        <a href="/registration.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>
                    <?php
                    } else {
                        // подключение к БД
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>