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
            <div>
                <form>
                    <input class="input_field" type="email" placeholder="Электронная почта"><br>
                    <input class="input_field" type="password" placeholder="Пароль"><br>
                    <input class="auth_button" type="submit" value="Войти">
                    <div class="reg">
                        <a class="reg_ref" href="registration.php">Регистрация</a>
                    </div>
                </form>
            </div>
        </main>
        <?php require './blocks/Footer.php'; ?>
    </body>
</html>
