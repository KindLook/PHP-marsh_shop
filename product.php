<?php
require_once 'parts/header.php';
if (isset($_GET['product'])) {
    $currentProduct = $_GET['product'];
    $product = $connect->query("SELECT * FROM products WHERE title='$currentProduct'");
    $product = $product->fetch_all(PDO::FETCH_ASSOC);

}
?>

<?//=var_dump($product[0][4])?><!--;-->
<div class="product-card">
    <a href="index.php">Вернуться на главную</a>

    <h2><?=$product[0][4]?>(<?=$product[0][3]?> рублей)</h2>
    <div class="descr"><?=$product[0][6]?></div>
    <img width="300" src="img/<?=$product[0][5]?>" alt="<?=$product[0][4]?>">

</div>
