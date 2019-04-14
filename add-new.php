<?php 
require_once 'config.php';
if($_SESSION['login'] != 'on') {
    header('Location: index.php');
}

if (!$_POST['sale']) {
    $_POST['sale'] = null;
}
if (!$_POST['new']) {
    $_POST['new'] = null;
}
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// if(isset($_POST['submit']) && $_POST['title'] == " ") {
//     exit('Необходимо заполнить все поля');
// }


if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
    move_uploaded_file($_FILES['img']['tmp_name'], './img/products/' . $_FILES['img']['name'] );
    $fileName = $_FILES['img']['name'];
} else {
    $fileName = 'no_photo.jpg'; 
}
//временное решение для пустых инпутов, позже переделаю
if(isset($_POST['submit'])) {
    if(empty($_POST['title'])) {
        header('Location: adminNotSuccess.php');
       exit('<br>Поле "Название" - не заполнено, необходимо его заполнить<br><br>' . '<a href="admin.php">Попробовать снова</a>');
    } elseif(empty($_POST['price'])) {
        header('Location: adminNotSuccess.php');
        exit('<br>Поле "Цена" - не заполнено, необходимо его заполнить<br><br>' . '<a href="admin.php">Попробовать снова</a>');
    } elseif(empty($_POST['description'])) {
        header('Location: adminNotSuccess.php');
        exit('<br>Поле "Описание" - не заполнено, необходимо его заполнить<br><br>' . '<a href="admin.php">Попробовать снова</a>');
    }
}
$sql = "INSERT INTO products (title, price, description, img, category, sale, new) 
                            VALUES (:title, :price, :description, :img, :category, :sale, :new)";

$stmt = $db->prepare($sql);

$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':price', $_POST['price']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':img', $fileName);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':sale', $_POST['sale']);
$stmt->bindValue(':new', $_POST['new']);

$stmt->execute();

header('Location: admin-success.php');


?>


