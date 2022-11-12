<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Личная страница</title>
    <link rel="stylesheet" href="assets/css/style_users_index.css">
</head>
<body>
       <h3>Добро пожаловать, <?= $login ?></h3>
        <a href="logout.php">Выйти</a>
    <div id="wrapper">
        <header>
           <p><img src="assets/images/logoza.ru.png" width="450" height="50"></p>

           <form name="search" action="#" method="get">
    <input type="text" name="q" placeholder="Search"><button type="submit">GO</button>
</form>
        </header>
        <nav>
                <ul class="top-menu">
        <li><a href="/home/">Главная</a></li>
        <li class="active"><a href="/aboutUs">О нас</a></li>
        <li><a href="/services/">Сервисы</a></li>
        <li><a href="/recipes/">Рецепты</a></li>
        <li><a href="/exercises/">Упражнения</a></li>
        <li><a href="/forum/">Форум</a></li>
    </ul>
        </nav>
<!--        <div id="heading"></div>-->
            <br>
            <br>
        <aside>
            <nav>
    <ul class="aside-menu">
        <li class="active">Контакты</li>
        <li><a href="/projects/">Проекты</a></li>
        <li><a href="/comand/">Команда</a></li>
        <li><a href="/more/">Узнать больше</a></li>
    </ul>
            </nav>
        </aside>
        <section>
            <blockquote>
    <p>
       Если у вас есть предложения по поводу улучшения сайта или вопросы, вы можете написать на почту ***@gmail.com.
    </p>
    <cite>С уважением, разработчик</cite>
    </blockquote>
        </section>
    </div>
    <footer></footer>
</body>
</html>
