<?php 
    include "parts/header.php";

        // Сохранение данных в базе
    // d($_POST);
    if (isset($_POST['add'])) {

        $sql_insert = "INSERT INTO products (id, image_url, name, description, price)
            VALUES (null, '{$_POST['image_url']}', '{$_POST['name']}', '{$_POST['description']}', '{$_POST['price']}')";

        $result_insert = mysqli_query($link, $sql_insert);

        $id = mysqli_insert_id($link);

        if ($result_insert) {
            echo "<div class='alert alert-success' role='alert'>
            Ваши изменения сохранены! (<a href='products_edit.php?id={$id}'>Редактировать</a>)
          </div>";
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Не удалось сохранить изменения!
          </div>';
        }
    }

?>

<h1>Добавление нового товара"<?=  $data['name'] ?>"
</h1>

<form method="POST">

    <input type="hidden" name="add" value="add"> 

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Путь до картинки" name="image_url">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Название" name="name">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Описание" name="description">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Цена" name="price">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

<?php 
    include "parts/footer.php";
?>