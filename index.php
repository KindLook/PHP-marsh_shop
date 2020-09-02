<?php
require_once 'parts/header.php';

if (isset($_GET['cat'])) {
    $currentCat = $_GET['cat'];
    $products = $connect->query("SELECT * FROM products WHERE cat='$currentCat'");
    $products = $products->fetch_all(PDO::FETCH_ASSOC);
}else {
    $products = $connect->query("SELECT * FROM products");
    $products = $products->fetch_all(PDO::FETCH_ASSOC);
}


//var_dump($products);

?>

    <div class="main">

        <? foreach ($products as $product) {?>
        <div class="card">
            <a href="product.php?product=<?=$product['1']?>">
                <img src="img/<?=$product['5']?>" alt="<?=$product['4']?>">
            </a>
            <div class="label"><?=$product['4']?> (<?=$product['3']?> рублей)</div>
            <form action="actions/add.php" method="post">
                <input type="hidden" name="id" value="<?=$product['0']?>">
                <input type="submit" value="Добавить в корзину">
            </form>
        </div>
        <? } ?>
    </div>

</body>
</html>

