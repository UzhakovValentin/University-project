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
                <form>
                    <input class = "input_field" type = "text" placeholder = "Имя*"><br>
                    <input class = "input_field" type = "text" placeholder = "Фамилия*"><br>
                    <input class = "input_field" type = "text" placeholder = "Отчество"><br>
                    <input class = "input_field" type = "email" placeholder = "Электронная почта*"><br>
                    <input class = "input_field" type = "tel" placeholder = "Телефонный номер*"><br>
                    <input class = "input_field" type = "password" placeholder = "Пароль*"><br>
                    <input class = "input_field" type = "password" placeholder = "Повторите пароль*"><br>
                    <input class = "button" type = "submit" value = "Оставить заявку">
                </form>
            </div>
        </main>
        <?php require './blocks/Footer.php';
        ?>
    </body>
</html>
