<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Globalelite228";
$dbName = "first";

// Включаем вывод всех ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Подключение к серверу MySQL
$link = mysqli_connect($servername, $username, $password);

// Проверка подключения
if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Создание базы данных
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать БД: " . mysqli_error($link);
} else {
    echo "База данных успешно создана или уже существует.<br>";
}
mysqli_close($link);

// Подключение к базе данных
$link = mysqli_connect($servername, $username, $password, $dbName);

// Проверка подключения к базе данных
if (!$link) {
    die("Ошибка подключения к БД: " . mysqli_connect_error());
}

// Создание таблицы users
$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(20) NOT NULL
)";
if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Users: " . mysqli_error($link);
} else {
    echo "Таблица users успешно создана или уже существует.<br>";
}

// Создание таблицы posts
$sql = "CREATE TABLE IF NOT EXISTS posts(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(15) NOT NULL,
    main_text VARCHAR(50) NOT NULL
)";
if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Posts: " . mysqli_error($link);
} else {
    echo "Таблица posts успешно создана или уже существует.<br>";
}

mysqli_close($link);
?>
