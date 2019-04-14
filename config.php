<?php

$user = 'root';
$pass = '';
// пароль таймвеб базы 87tqH5be
// имя таймвеб базы cb81630_estor
$db = new PDO('mysql:host=localhost;dbname=estor', $user, $pass);

session_start();

// $sql = "SELECT * FROM products"; 
// $result = $db->query($sql);

// $products = $result->fetchALL(PDO::FETCH_ASSOC);

// echo "<ul>";
// foreach ($products as $product) {
//     echo '<li>';
//     echo $product['title'];
//     echo '</li>';
//     echo '<li>';
//     echo $product['price'];
//     echo '</li>';
// }
// echo "</ul>";



?>