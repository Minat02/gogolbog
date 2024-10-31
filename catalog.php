<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>главная</title>
</head>
<style>
</style>
<body class="body">
<div class="border">
<header>
<nav>
<button onclick="document.location='index.php'" class="b1">О нас</button>    
<button onclick="document.location='catalog.php'" class="b1">Каталог</button>    
<button onclick="document.location='trash.php'" class="b1">Корзина</button> 
</nav>
</header>
<h1 class="h1">Маэстро.ru</h1>
<input class="b1" type="button" value="назад" onclick="history.back()"/>
</div>
<hr>
<form class="but">
    <label for="complekt">Комплектующие:</label>    
    <select onchange="if (this.value) window.location.href = this.value" id="complekt" name="complekt">
        <option value="med.php">Медиаторы</option>
        <option value ="strings">Струны</option>
        <option value ="kol">Колки</option>
        <option value ="tuners">Тюнеры</option>
        <option selected disabled></option>
    </select>
</form>
<div class="container">
    <button onclick="document.location='acoustic.php'" type="button" class="b"><img src="icons/гит.png" class="i">Акустические гитары</button>
    <button onclick="document.location='electro.php'" type="button" class="b"><img src="icons/эл.png" class="i">Электро-гитары</button>
    <button onclick="document.location='bas.php'" type="button" class="b"><img src="icons/бас.png" class="i">Бас-гитары</button>
    <button onclick="document.location='classic.php'" type="button" class="b"><img src="icons/клас.png" class="i">Классические гитары</button>
</div>
<hr>
<div class="body2">
</div>
</body>
</html>
