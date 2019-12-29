<?php

function RoleCheck() {

    $host = 'localhost:8080';
    $user = 'root';
    $password = '1234567890';
    $database = 'olimpicdb';
    $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка: " . mysql_error($link));


    if (isset($_COOKIE['id']) and isset($_COOKIE['uh'])) {
        $query = mysqli_query($link, "SELECT roleId FROM users WHERE userId = '" . $_COOKIE['id'] . "'");
        $userdata = mysqli_fetch_assoc($query);

        if ($userdata['roleId'] === '1') {
            mysqli_close($link);
            return 'Admin';
        } else {
            mysqli_close($link);
            return 'User';
        }
    }
}
