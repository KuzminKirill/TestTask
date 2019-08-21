<?php

require 'config_db.php';
$data = $pdo->query('SELECT name, email FROM persons LIMIT 10');

$rows = [];
while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
}
echo json_encode($rows);
