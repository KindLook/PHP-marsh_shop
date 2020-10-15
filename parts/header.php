<?php
session_start();
require_once 'db/db.php';

//$connect = mysqli_connect('127.0.0.1', 'root', 'root',
//    'mush_shop');

$cats = $connect->query("SELECT * FROM cats");
$cats = $cats->fetch_all(PDO::FETCH_ASSOC);


//var_dump($cats);

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
        <li><a href="index.php?cat=<?= $cat['1']?>"><?= $cat['2']?></a></li>
        <? } ?>
        <li><a href="cart.php">Корзина (Товаров: <?=$_SESSION['totalQuantity']?> на сумму <?=$_SESSION['totalPrice']?> руб)</a></li>
    </ul>
</nav>
<hr>
