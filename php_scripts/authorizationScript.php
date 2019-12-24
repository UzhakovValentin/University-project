<?php

$email = $_POST["email"];

function generateCode($length = 6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0, $clen)];
    }
    return $code;
}

require '../config/dbConnectConfig.php';

$link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка: " . mysql_error($link));

$authQuery = "SELECT userId, email, password FROM users WHERE email='$email'";

$data = mysqli_fetch_assoc(mysqli_query($link, $authQuery));
if (isset($data)) {
    if (md5($_POST["password"]) === $data["password"]) {
        $userHash = md5(generateCode(10));
        $hashInsertQuery = "UPDATE users SET userHash='" . $userHash . "' WHERE userId='" . $data['userId'] . "'";
        mysqli_query($link, $hashInsertQuery);

        setcookie("id", $data['userId'], time() + 360, "/");
        setcookie("uh", $userHash, time() + 360, "/");
        header('Location: ../account.php');
    } else {
        print "Введены неверно логин или пароль";
    }
} else {
    print "Введены неверно логин или пароль";
}










