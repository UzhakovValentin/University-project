<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>

        </style>
    </head>
    <body>
        <main class="account-main">
            <div class="user-info">
                <div class="user-doings">
                    <a href="event-application.php">Оставить заявку</a><br>
                    <a href="php_scripts/logout.php">Выйти</a>
                </div>
            </div>
            <div class="application-container">
                <table class="application_list">
                    <?php
                    include './config/dbConnectConfig.php';
                    $link = mysqli_connect($host, $user, $password, $database)
                            or die("Ошибка: " . mysql_error($link));
                    $userId = $_COOKIE['id'];
                    $getUsersEventsQuery = "SELECT eventId, title, description, status, eventtimes.starttime, eventtimes.endtime FROM events JOIN eventtimes ON eventtimes.eventtimeId = events.eventtimeId";
                    $result = mysqli_query($link, $getUsersEventsQuery)
                            or die("Ошибка: " . mysqli_error($link));

                    while ($data = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?php echo $data['title'] ?></td>
                            <td><?php echo $data['description'] ?></td>
                            <td><?php echo $data['status'] ?></td>
                            <td>
                                <?php echo "Начало: " . $data['starttime'] . "<br>" ?>
                                <?php echo "Конец: " . $data['endtime'] ?>
                            </td>
                            <td>
                                <a href='../php_scripts/AcceptScript.php?id=<?php echo $data['eventId']; ?>'>Подтвердить</a>
                                <a href="../php_scripts/DeniedScript.php?id=<?php echo $data['eventId']; ?>">Отклонить</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </main>
    </body>
</html>
