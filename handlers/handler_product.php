<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');

    if(!isset($_SESSION['basket'])){
        $_SESSION['basket'] = [];
    }
    $_SESSION['basket'][] = $_GET['product_id'];

    echo count($_SESSION['basket']);
?>