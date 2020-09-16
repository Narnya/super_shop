<?php
/**
 * 
 * Карточнка товара
 * 
 * 
 */

$header_config = [
    'title' => 'Карточнка товара',
    'style' => 'product.css',
];

include('parts/header.php');

$template = [
    'id' => '',
    'img_url' => '',
    'name' => '',
    'description' => '',
    'price' => '',
];


if (!empty($_GET['id'])){
    d($_GET);

$sql_template = "SELECT*FROM products WHERE id='{$_GET['id']}'";
$result = mysqli_query($link, $sql_template);
$template = mysqli_fetch_assoc($result);
// d($template);
} else {
    header('Location: /catalog.php');   
}
?>

<div class="product">
    <div class="product-image" style="background-image: url(<?= $template['image_url'] ?>);"></div>
    <div class="product-name"><?= $template['name'] ?></div>
    <div class="product-price"><?= $template['price'] ?> руб.</div>
    <div class="product-description"><?= $template['description'] ?></div>
    <div class="product-btn" data-product-id="<?= $template['id']?>">Добавить в корзину</div>
</div>


<?php
$footer_config = [
    'script' => 'product.js'
];
include('parts/footer.php');
?>