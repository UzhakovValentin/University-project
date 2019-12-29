<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php require './blocks/Header.php'; ?>
        <main>
            <div class="registr_form">
                <form action="php_scripts/registrationScript.php" method="POST">
                    <input class="input_field" name="name" type="text" required placeholder="Имя*"><br>
                    <input class="input_field" name="surname" type="text" required placeholder="Фамилия*"><br>
                    <input class="input_field" name="patronymic" type="text" placeholder="Отчество"><br>
                    <input class="input_field" name="email" type="email" required placeholder="Электронная почта*"><br>
                    <input class="input_field" name="phone" type="tel" required placeholder="Телефонный номер*"><br>
                    <input class="input_field" name="password" type="password" required placeholder="Пароль*"><br>
                    <input class="input_field" name="repeatPass" type="password" required placeholder="Повторите пароль*"><br>
                    <input class="button" type="submit" value="Зарегистрироваться">
                </form>
            </div>
        </main>
        <?php require './blocks/Footer.php'; ?>
    </body>
</html>
