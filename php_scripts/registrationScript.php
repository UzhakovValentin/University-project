<?php

$name = $_POST["name"];
$surname = $_POST["surname"];
$patronymic = $_POST["patronymic"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$repeatPass = $_POST["repeatPass"];

$passHash = md5($password);
require '../config/dbConnectConfig.php';
$link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка: " . mysql_error($link));
$registrationQuery = "INSERT INTO users VALUES(NULL, "
        . "'$name', "
        . "'$surname', "
        . "'$patronymic', "
        . "'$passHash', "
        . "'$email', "
        . "'$phone', '2', NULL )";

$result = mysqli_query($link, $registrationQuery)
        or die("Ошибка: " . mysqli_error($link));

mysqli_close($link);
header('Location: ../authorization.php');

