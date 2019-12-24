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
                <div class="event-list-item">
                    <a href="" class="event-avatar"></a>
                    <div class="event-title">
                        fghfdghfdfydhf
                    </div>
                    <div>
                        lfjgdfklgjdkfl
                    </div>
                    <div>
                        fdgdfgsd
                    </div>
                </div>
                <div class="event-list-item">
                    <a href="" class="event-avatar"></a>
                    <div class="event-title">
                        fghfdghfdfydhf
                    </div>
                    <div>
                        lfjgdfklgjdkfl
                    </div>
                    <div>
                        fdgdfgsd
                    </div>
                </div>
                <div class="event-list-item">
                    <a href="" class="event-avatar"></a>
                    <div class="event-title">
                        fghfdghfdfydhf
                    </div>
                    <div>
                        lfjgdfklgjdkfl
                    </div>
                    <div>
                        fdgdfgsd
                    </div>
                </div>
                <div class="event-list-item">
                    <a href="" class="event-avatar"></a>
                    <div class="event-title">
                        fghfdghfdfydhf
                    </div>
                    <div>
                        lfjgdfklgjdkfl
                    </div>
                    <div>
                        fdgdfgsd
                    </div>
                </div>
            </div>
        </main>
        <?php require './blocks/Footer.php'; ?>
    </body>
</html>

