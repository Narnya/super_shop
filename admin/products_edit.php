<?php 
    include "parts/header.php";
    
    // Если не передан параметр id делаем редирект на страницу с товарами
    if (!isset($_GET['id']) || (isset($_GET['id']) && empty($_GET['id']))){
        header('Location:/admin/products.php');
    }

    // Сохранение данных в базе
    // d($_POST);
    if (isset($_POST['edit'])) {
        $sql_update = "UPDATE products SET
            image_url = '{$_POST['image_url']}',
            name = '{$_POST['name']}',
            description = '{$_POST['description']}',
            price = '{$_POST['price']}'
            WHERE id='{$_GET['id']}'";
        $result_update = mysqli_query($link, $sql_update);


        if ($result_update) {
            echo '<div class="alert alert-success" role="alert">
            Ваши изменения сохранены!
          </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Не удалось сохранить изменения!
          </div>';
        }
    }

    $sql = "SELECT * FROM products WHERE id = {$_GET['id']}";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_assoc($result);

    // d($data);
?>

<h1>Редактирование товара "<?=  $data['name'] ?>"
</h1>

<form method="POST">

    <input type="hidden" name="edit" value="edit"> 

    <div class="form-group">
        <input type="text" class="form-control" placeholder="ID" value="<?=  $data['id'] ?>" readonly>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Путь до картинки" value="<?=  $data['image_url'] ?>" name="image_url">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Название" value="<?=  $data['name'] ?>" name="name">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Описание" value="<?=  $data['description'] ?>" name="description">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Цена" value="<?=  $data['price'] ?>" name="price">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

<?php 
    include "parts/footer.php";
?>