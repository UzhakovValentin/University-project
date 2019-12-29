<?php

include '../config/dbConnectConfig.php';
$link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка: " . mysql_error($link));

$id = $_GET['id'];
$accept = "UPDATE events SET status ='Accepted' WHERE eventId='$id'";
$result = mysqli_query($link, $accept)
        or die("Ошибка: " . mysqli_error($link));
mysqli_close($link);
header('Location: ../account.php');
