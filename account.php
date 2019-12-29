<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        require './php_scripts/authCheck.php';
        require './php_scripts/roleCheck.php';
        if (AuthCheck()) {
            require './blocks/AuthHeader.php';
            if (RoleCheck() === 'Admin') {
                require './blocks/AdminAccount.php';
            } else {
                require './blocks/UserAccount.php';
            }
        } else {
            echo 'Вы не авторизованы';
        }
        ?>
    </body>
</html>
