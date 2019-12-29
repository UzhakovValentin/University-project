<?php

function AuthCheck() {

    $host = 'localhost:8080';
    $user = 'root';
    $password = '1234567890';
    $database = 'olimpicdb';
    $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка: " . mysql_error($link));


    if (isset($_COOKIE['id']) and isset($_COOKIE['uh'])) {
        $query = mysqli_query($link, "SELECT userHash FROM users WHERE userId = '" . $_COOKIE['id'] . "'");
        $userdata = mysqli_fetch_assoc($query);

        if ($userdata === null and $userdata['userHash'] !== $_COOKIE['uh']) {
            mysqli_close($link);
            return false;
        } else {
            mysqli_close($link);
            return true;
        }
    } else {
        mysqli_close($link);
        return false;
    }
}
