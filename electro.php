<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="tovar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">
<style>
</style>
<div class="border">
<header>
<nav>
<button onclick="document.location='main.php'" class="b1">О нас</button>    
<button onclick="document.location='catalog.php'" class="b1">Каталог</button>    
<button onclick="document.location='trash.php'" class="b1">Корзина</button>    
</nav>
</header>
<h1 class="h1">Маэстро.ru</h1>
<input class="b1" type="button" value="назад" onclick="history.back()"/> 
</div>
<hr>
<h1 class="h">Электро-гитары</h1>
<div class="conte">
<?php
require_once('db.php');
$sql = "SELECT * FROM tovar WHERE Category = 'Electro'";
$result = mysqli_query($conn, $sql); // предполагаем, что $connection — это ваше соединение с БД
$selectedCategory = 'Acoustic'; // или как вы его определяете

if ($result && mysqli_num_rows($result) > 0) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
            <div class="hui">
                <img src="<?= htmlspecialchars($product['Upload_patch']) ?>" alt="<?= htmlspecialchars($product['Name']) ?>" class="product-image">
                <strong><?= htmlspecialchars($product['Name']) ?></strong><br>
                <p style="padding:20px;">Цена: <?= htmlspecialchars($product['Price']) ?>₽
                <form action="trash.php" method="POST">
                    <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['id']) ?>">
                    <input type="hidden" name="category" value="<?= htmlspecialchars($selectedCategory) ?>">
                    <button type="submit" class="add-button">Добавить в корзину</button>
                </form>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php
} else {
    echo '<p>ошибка</p>';
}
?>
</div>
</body>
</html>