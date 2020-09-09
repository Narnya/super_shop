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
?>

<div class="catalog">Каталог
    <div class="catalog-header">
        <h1 class="catalog-title">Мужщинам</h1>
        <div class="catalog-subtitle">Все товары</div>
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