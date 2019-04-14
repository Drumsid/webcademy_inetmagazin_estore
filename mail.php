<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$adminEmail = "den-sidnay@yandex.ru";
$adminSubject = "Создан новый заказ";

$adminMessage = "<p>На сайте сделан новый заказ:</p>";
$adminMessage .= "<p>Продукт: " . $_POST['productTitle'] . "<br>";
$adminMessage .= "id Продуктa: " . $_POST['productId'] . "<br>";
$adminMessage .= "Стоимость: " . $_POST['productPrice'] . "</p>";
$adminMessage .= "<h2>Данные покупателя:</h2>";
$adminMessage .= "<p>Имя: " . $_POST['name'] . "<br>";
$adminMessage .= "<p>Email: " . $_POST['mail'] . "<br>";
$adminMessage .= "<p>Телефон: " . $_POST['phone'] . "<br>";
$adminMessage .= "<p>Адрес: " . $_POST['addres'] . "<br>";


$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";




mail($adminEmail, $adminSubject, $adminMessage, $headers);

$userEmail = $_POST['email'];
$userSubject = 'Ваш заказ успешно получен!';
$usermessage = 'Спасибо за заказ, мы скоро свяжемся с Вами!';


mail($userEmail, $userSubject, $userMessage, $headers);

header('Location: order-success.php');

