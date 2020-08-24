<?php
require_once 'db/db.php';

$cats = $connect->query("SELECT * FROM cats");
$cats = $cats->fetch_all(PDO::FETCH_ASSOC);

//echo "<pre>";
//var_dump($cats);
//echo "</pre>";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Главная</a></li>
        <? foreach ($cats as $cat) { ?>
        <li><a href="index.php?cat=<?= $cat['1']?>"><?= $cat['2']?></a></li>  //прописываем в _GET cat=name
        <? } ?>
        <li><a href="cart.php">Корзина (Товаров: 15 на сумму 9955 руб)</a></li>
    </ul>
</nav>
<hr>
