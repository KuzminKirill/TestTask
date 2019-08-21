
<?php
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$user = 'YOUR_USER';
$pass = 'YOUR_PASS';


$dsn = 'mysql:host=YOUR_HOST;dbname=YOUR_BD_NAME;charset=utf8';


$pdo = new PDO($dsn, $user, $pass, $opt);
?>