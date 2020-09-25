<?php 

    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');

    $response = [
        'products' => []
    ];
    $resposne_1 = [
        'cirkle' => [] 
    ];
    //$sql_products = "SELECT * FROM products";
    $sql_products = "SELECT products.* FROM products INNER JOIN product_category 
    ON products.id = product_category.product_id 
    WHERE product_category.category_id = '{$_GET['category_id']}'";
    $result_products = mysqli_query($link, $sql_products);

    while($row = mysqli_fetch_assoc($result_products)){
        // d($row);
        $response['products'][] = $row;
    };

    sleep(3);
    echo json_encode($response['products']);
?>