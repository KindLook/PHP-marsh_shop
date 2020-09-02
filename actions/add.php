<?php

session_start();
require_once '../db/db.php';

var_dump($_POST);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $connect = mysqli_connect('127.0.0.1', 'root', 'root',
        'mush_shop');
    $product = $connect->query("SELECT * FROM products");
    var_dump($product);
    $product = $product->fetch(PDO::FETCH_ASSOC);

    $_SESSION['totalQuantety'] = $_SESSION['totalQuantety'] ? $_SESSION['totalQuantety'] +=1 : 1;
    $_SESSION['totalQuantety'] = $_SESSION['totalQuantety'] ? $_SESSION['totalQuantety'] +=1 : 1;
}

//var_dump($_SESSION);

//header("Location: ../index.php");