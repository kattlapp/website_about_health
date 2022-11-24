<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Спорт и здоровый образ жизни</title>
</head>
<body>

    <?php if ($login === null): ?>
        <a href="login.php">Авторизуйтесь</a>
    <?php else:
    header('Location: users_index.php');
    ?>

    <?php endif; ?>

    <h1 align = "center">Здоровый образ жизни</h1>
    <p><img width="1517px" src="assets/images/first.jpg"></p>
    <p>Здоровый образ жизни — образ жизни отдельного человека с целью профилактики болезней и укрепления здоровья.</p>
    <p><center><img width="1024px" src="assets/images/noch-buda-svet.jpg"></center></p>
    <p>Здоровый образ жизни помогает нам выполнять наши цели и задачи, успешно реализовывать свои планы, справляться с трудностями, а если придется, то и с колоссальными перегрузками. Крепкое здоровье, поддерживаемое и укрепляемое самим человеком, позволит ему прожить долгую и полную радостей жизнь.</p>
    <p><center><img width="1019px" src="assets/images/gant.jpg"></center></p>
    <p>Здоровье — бесценное богатство каждого человека в отдельности, и всего общества в целом. При встречах и расставаниях с близкими нам людьми мы всегда желаем им хорошего здоровья, потому что это — главное условие полноценной и счастливой жизни.</p>

</body>
</html>
