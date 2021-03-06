<?php 
    include "parts/header.php";
    $sql = "SELECT * FROM products";
    $result = mysqli_query($link, $sql);
?>


<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Путь до картинки (img_url)</th>
        <th scope="col">Название товара (name)</th>
        <th scope="col">Описание товара (description)</th>
        <th scope="col">Цена товара (price)</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <th scope="row">
                <a href="products_edit.php?id=<?= $row['id'] ?>">
                    <?= $row['id'] ?>
                </a>
                
            </th>
            <td><?= $row["image_url"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["description"] ?></td>
            <td><?= $row["price"] ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php 
    include "parts/footer.php";
?>