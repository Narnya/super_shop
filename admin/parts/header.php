<?php 
    include "../parts/header_conf.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/products.php">Список товаров</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/prodact_add.php">Добавить новый товар</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/orders.php">Заказы</a>
            </li>
        </ul>
        <br></br>