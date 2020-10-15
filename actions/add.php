<?php

session_start();
require_once '../db/db.php';

//var_dump($_POST);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $product = $connect->query("SELECT * FROM products WHERE id='$id'");
    $product = $product->fetch_all(PDO::FETCH_ASSOC);

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1;
    }else{
        $_SESSION['cart'][$id]['quantity'] = 1;
    }


    $_SESSION['totalQuantity'] = $_SESSION['totalQuantity'] ? $_SESSION['totalQuantity'] +=1 : 1;
    $_SESSION['totalPrice'] = $_SESSION['totalPrice'] ? $_SESSION['totalPrice'] +=$product[0][3] : $product[0][3];

}
var_dump($_SESSION);

//
//header("Location: ../index.php");