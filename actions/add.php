<?php

session_start();
require_once '../db/db.php';

var_dump($_POST);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $product = $connect->query("SELECT * FROM products WHERE id='$id'");
    $product = $product->fetch_all(PDO::FETCH_ASSOC);
    var_dump($product);

    $_SESSION['totalQuantety'] = $_SESSION['totalQuantety'] ? $_SESSION['totalQuantety'] +=1 : 1;
    $_SESSION['totalQuantety'] = $_SESSION['totalQuantety'] ? $_SESSION['totalQuantety'] +=1 : 1;
}

//var_dump($_SESSION);

//header("Location: ../index.php");