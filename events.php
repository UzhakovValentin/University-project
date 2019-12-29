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
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        require './php_scripts/authCheck.php';
        if (AuthCheck()) {
            require './blocks/AuthHeader.php';
        } else {
            require './blocks/Header.php';
        }
        ?>
        <main class="event-list">
            <div class="events">
                <?php
                include './config/dbConnectConfig.php';
                $link = mysqli_connect($host, $user, $password, $database)
                        or die("Ошибка: " . mysql_error($link));

                $getEventsQuery = "SELECT title, description, eventtimes.starttime, eventtimes.endtime FROM events JOIN eventtimes ON eventtimes.eventtimeid = events.eventtimeid WHERE status='Accepted'";
                $result = mysqli_query($link, $getEventsQuery)
                        or die("Ошибка: " . mysqli_error($link));

                while ($data = mysqli_fetch_assoc($result)):
                    ?>
                    <div class="event-list-item">
                        <a href="" class="event-avatar"></a>
                        <div class="event-title">
                            <?php echo $data['title'] ?>
                        </div>
                        <div class="event-discr">
                            <?php echo $data['description'] ?>
                        </div>
                        <div class="event-date">
                            <?php echo "Начало: " . $data['starttime'] . "<br>" ?>
                            <?php echo "Конец: " . $data['endtime'] ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                mysqli_close($link);
                ?>
            </div>
        </main>
        <?php require './blocks/Footer.php'; ?>
    </body>
</html>

