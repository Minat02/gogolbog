<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form" action="registration.php" method="post">
        <strong>Регистрация</strong><br>
        <input  type="text" name="name" placeholder="login" required><br>
        <input type="password" name="pass" placeholder="password" required><br>
        <input type="password" name="repeat_pass" placeholder="repeat_pass" required><br>
        <button onclick="window.location.href='index.php'" class="btn">Регистрация</button>
</form>
</body>
</html>