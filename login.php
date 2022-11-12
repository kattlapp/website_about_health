<?php
if (!empty($_POST)) {
    require __DIR__ . '/auth.php';

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
<html>
<head>
    <title>Форма авторизации</title>
        <link rel="stylesheet" href="assets/css/style_login.css">
</head>
<body>

<?php if (isset($error)): ?>
<span style="color: red;">
    <?= $error ?>
</span>
<?php endif; ?>

<form action="login.php" method="post">
    <h2 align = center>Авторизация</h2>
   <div class="field">
    <label for="login">Логин: </label><input type="text" name="login" id="login">
    </div>
    <br>
    <div class="field">
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    </div>
    <br>
    <div class="field">
    <input type="submit" value="Войти">
    </div>
</form>
</body>
</html>
