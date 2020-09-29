<?php
/**
 * 
 * Корзина
 * 
 * 
 */

$header_config = [
    'title' => 'Корзина',
    'style' => 'basket.css',
];

include('parts/header.php');

// d($_SESSION['basket']);
?>

<div class="basket">
    <div class="splitter">
        <div class="spliiter-container">
            <div>
                <p class="down-line"></p>
            </div>
            <div>
                <p class="up-line"></p>
            </div>
            <div>
                <p class="down-line"></p>
            </div>
            <div>
                <p class="up-line"></p>
            </div>
            <div>
                <p class="down-line"></p>
            </div>
            <div>
                <p class="up-line"></p>
            </div>
        </div>
    </div>

    <div class="basket-container">
        <div class="basket-adres-header">
            <h1>Адрес доставки</h1>
            <p>Все поля обязательны для заполнения</p>
            <label for="list-of-services">Выберите вариант доставки</label>
            <select name="" id="list-of-services">
                <option value="">Курьерская служба - 500 руб.</option>
                <option value="">V1</option>
                <option value="">V1</option>
            </select>
            <div class="names">
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="Фамилия">
            </div>
            <input type="text" placeholder="Адрес">
            <div class="city-info">
                <input type="text" placeholder="Город">
                <input type="text" placeholder="Индекс">
            </div>
            <div class="contact-info">
                <input type="text" placeholder="Телефон">
                <input type="text" placeholder="E-mail">
            </div>
        </div>
    </div>

    <div class="splitter">
        <div class="spliiter-container">
            <div>
                <p class="down-line"></p>
            </div>
            <div>
                <p class="up-line"></p>
            </div>
            <div>
                <p class="down-line"></p>
            </div>
            <div>
                <p class="up-line"></p>
            </div>
            <div>
                <p class="down-line"></p>
            </div>
            <div>
                <p class="up-line"></p>
            </div>
        </div>
    </div>

    <div class="payment-option">

        <h1>Вариант оплаты</h1>
        <p>Все поля обязательны для заполения</p>

        <div class="calculated-block">
            <p>Стоиомсть:</p>
            <p>Доставка:</p>
            <p>Итого:</p>
        </div>

        <form action="">
            <label for="payment-select">Выберите способ оплаты</label>
            <select name="" id="payment-select">
                <option value="">Банковская карта 1</option>
                <option value="">Моб.</option>
                <option value="">3</option>
            </select>
            <input type="submit" value="Закзать">
        </form>
    </div>

</div>

<?php
$footer_config = [
    'script' => 'basket.js'
];
include('parts/footer.php');
?>