<?php
include_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form" action="auth.php" method="post">
        <strong>Авторизация</strong><br>
        <input  type="text" name="name" placeholder="login" required><br>
        <input type="password" name="pass" placeholder="password" required><br>
        <input type="submit" value="Войти">
        <button onclick="window.location.href='registr.php'" class="btn">Регистрация</button>
    </form>
</body>
</html>