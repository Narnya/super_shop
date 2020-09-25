<?php
/**
 * 
 * Каталог
 * 
 * 
 */

$header_config = [
    'title' => 'Каталог',
    'style' => 'catalog.css',
];

include('parts/header.php');

$category_id = 1;

if(!empty($_GET['category_id'])){
    $category_id = (int) $_GET['category_id'];
}

$sql_category = "SELECT * FROM categories WHERE id='{$category_id}'";
$result = mysqli_query($link, $sql_category);

$category = mysqli_fetch_assoc($result);
d($category);
?>

<div class="catalog" data-category-id="<?= $category['id'] ?>">Каталог
    <div class="catalog-header">
        <h1 class="catalog-title"><?= $category['name'] ?></h1>
        <div class="catalog-subtitle">Все товары</div>
    </div>

    <div class="catalog-sort">
        <select name="" id="" aria-placeholder="Категория">
            <option value="">Категория</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <select name="" id="" aria-placeholder="Размер">
            <option value="">Размер</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <select name="" id="" aria-placeholder="Стоимость">
            <option value="">Стоимость</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
    </div>

    <div class="catalog-list">

    </div>
    <div class="loader">Загрузка...</div>
</div>

<?php

$footer_config = [
    'script' => 'catalog.js'
];
include('parts/footer.php');
?>