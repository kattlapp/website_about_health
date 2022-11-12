<?php
    $exit_login = "exit";
    $exit_pass = "exit";
setcookie('login', $exit_login, 0, '/');
setcookie('password', $exit_pass, 0, '/');
header('Location: index.php');
?>

<html>
<head>
    <title>Главная страница</title>
</head>
<body>

</body>
</html>
