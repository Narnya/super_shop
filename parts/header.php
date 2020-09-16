<?php 
/**
 * 
 * Шапка сайта
 */
print_r($header_config);
include('parts/header_conf.php');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $header_config['title'] ?></title>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/<?= $header_config['style']?>">
</head>
<body>
    <div class="wrapper">
    <header>
        <nav>
            <a href="/catalog.php?category_id=1">Женщинам</a>
            <a href="/catalog.php?category_id=2">Мужщинам</a>
            <a href="/catalog.php?category_id=3">Детям</a>
        </nav>
    </header>