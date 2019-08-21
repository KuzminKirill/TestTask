<?php

define('DEBUG', 1);

if (defined('DEBUG')) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

$name = $_POST['name'];
$email = $_POST['email'];

if ($name == '' || $email == '') {
    echo "Введите данные";
    exit();
}

require 'config_db.php';

$sql = 'INSERT INTO persons SET name=:name, email=:email';
$query = $pdo->prepare($sql);
$res = $query->execute(['name' => $name, 'email' => $email]);

header('Location: table.html');