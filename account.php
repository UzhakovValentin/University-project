<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php require './blocks/AuthHeader.php'; ?>
        <main class="account-main">
            <div class="user-info">
                <div class="user-doings">
                    <a href="event-application.php">Оставить заявку</a><br>
                    <a href="php_scripts/logout.php">Выйти</a>
                </div>
            </div>
            <div class="application-container">
                <table class="application_list">
                    <?php for ($i = 0; $i < 8; $i++): ?>
                        <tr>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                        </tr>
                    <?php endfor; ?>
                </table>

            </div>
        </main>

    </body>
</html>
