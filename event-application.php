<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        require './blocks/AuthHeader.php';
        ?>  
        <main>
            <div class = "registr_form">
                <form action="event-application.php" method="POST" enctype="multipart/form-data">
                    <input class = "input_field" type = "text" name="title" required placeholder = "Название*"><br>
                    <input class = "input_field" type = "text" name="discription" required placeholder = "Описание*"><br>
                    <input class = "input_field" type = "datetime-local" name="start" required placeholder = "Время начала*"><br>
                    <input class = "input_field" type = "datetime-local" name="end" required placeholder = "Время конца*"><br>
                    <input class = "input_field" type = "file" name="img" placeholder = "Изображение"><br>
                    <input class = "button" type = "submit" value = "Оставить заявку">
                </form>
                <?php
                require './config/dbConnectConfig.php';
                $link = mysqli_connect($host, $user, $password, $database)
                        or die("Ошибка: " . mysql_error($link));

                $title = $_POST['title'];
                $discription = $_POST['discription'];
                $start = $_POST['start'];
                $end = $_POST['end'];
                $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
                $userId = $_COOKIE['id'];

                $addTimeQuery = "INSERT INTO eventtimes VALUES (NULL, '$start', '$end' )";
                $result = mysqli_query($link, $addTimeQuery)
                        or die("Ошибка: " . mysqli_error($link));
                $timeId = mysqli_insert_id($link);
                $addEventQuery = "INSERT INTO events VALUES (NULL, '$title', '$img', '$discription', 'InProceed', '$timeId', '$userId')";
                $addresult = mysqli_query($link, $addEventQuery)
                        or die("Ошибка: " . mysqli_error($link));
                mysqli_close($link);
                ?>
            </div>
        </main>
        <?php require './blocks/Footer.php';
        ?>
    </body>
</html>
