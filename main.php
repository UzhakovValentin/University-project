<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>СК Олимпийский</title>
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
        <main>
            <div class="images_row">
                <img class="pic" src="images/1.jpg">
                <img class="pic" src="images/3.jpg">
                <img class="pic" src="images/2.jpg">
            </div>
            <div class="main_text">
                <p class="text" >Спортивный комплекс «Олимпийский» — это уникальное многофункциональное сооружение, ныне считающееся одной из самых значимых достопримечательностей столицы. </p>
                <p class="text">«Олимпийский» был выстроен к XXII Московским Олимпийским играм 19 июля 1980 года, в день открытия Олимпиады, и стал официальным днем рождения спортивного комплекса. Самый большой крытый спортивный комплекс на территории Европы со дня постройки и по 2017 год, центральная арена которого вмещает 35 000 зрителей.</p> 
                <p class="text">«Олимпийский» — это постоянное место проведения масштабных музыкально-развлекательных мероприятий. В разные годы под этой знаменитой крышей собирали аншлаги международные звезды первой величины, а в 2009 году «Олимпийский» стал местом проведения музыкального конкурса «Евровидение». Общее количество зрителей, посетивших «Олимпийский» в 2010 году, составляет более 3,5 миллионов человек; в том же году в спорткомплексе было проведено около 250 зрелищных мероприятий.</p>
                <p class="text">«Олимпийский» расположен в непосредственной близости к историческому центру Москвы (недалеко от станции метро «Проспект мира») и оснащен удобной парковкой. На территории спорткомплекса функционируют многочисленные рестораны и бистро, различные магазины и салоны красоты. </p>
                <p class="text">Концерт в «Олимпийском» - это всегда историческое событие. Спорткомплекс был и остается самой вместительной крытой площадкой страны, а собрать такой зал способны только лучшие артисты планеты.</p>
            </div>
        </main>
        <?php require './blocks/Footer.php'; ?>
    </body>
</html>