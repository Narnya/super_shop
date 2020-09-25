<?php
/**
 * 
 * Главная страница
 * 
 * 
 */

$header_config = [
    'title' => 'Главная страница',
    'style' => 'index.css',
];

include('parts/header.php');
?>

<div class="main-page-header">
    <h1>Новые поступления весны</h1>
    <p>Мы подготовили для Вас лучшие новинки сезона</p>
    <div class="main-page-header-title">
        <a href="">Посмотреть новинки</a>
    </div>
</div>

<div id="grid">
    <div id="grid-1">
        <div id="jeans-jaket">
            <h3>Джинсовые курки</h3>
            <h4>New arrival</h4>
        </div>
        <div id="belts">1</div>
    </div>
    <div id="grid-2">
        <div id="new_items">
            <p>Каждый сезон мы подгтоавливаем длч Вас исключительно лучшую модную лджежду. Следите за нашиими  новинками</p>
        </div>
        <div id="jeans">
            <h3>Джинсы</h3>
            <p>от 3200 руб.</p>
        </div>
        <div id="accessories">
            <h3>Аксессуары</h3>
        </div>
    </div>
    <div id="grid-3">
        <div id="boots">1</div>
        <div id="low-price">
            <p>Самые низкие цены в Мокве. Нащлши дешевел? Вернем разницу.</p>
        </div>
        <div id="sports-wear">
            <div id="sports-wear-cover">
                <h3>Спортивная одежда</h3>
                <p>от 590 руб.</p>
            </div>
        </div>
    </div>
    <div id="grid-4">
        <div id="boots-description">
            <h3>
                Элегантная обувь
            </h3>
            <p>
                Ботинки, кроссовки
            </p>
        </div>
        <div id="child-wear">
            <h3>
                Детская одежда
            </h3>
            <h4>
                New arrival
            </h4>
        </div>
    </div>
</div>

<div class="offer-form">
    <h1>Будь всегда в курсе выгодных предложений</h1>
    <p>подписывайся и следи за новинками и выгодными предложениями </p>
    <form id="offer-form" action="">
        <div id="offer-form-inputs">
            <input type="text" placeholder="e-mail">
            <input type="submit" value="записаться">
        </div>
        <p>Некорректный e-mail. Попробуйте еще раз.</p>
    </form>
</div>


<?php
$footer_config = [
    'script' => 'index.js'
];
include('parts/footer.php');
?>

