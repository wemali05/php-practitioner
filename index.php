<?php
 
try {
    $pdo = new PDO('mysql:host=localhost; dbname:mytod;', 'root', '0791758801');
} catch (PDOException $e) {
    die('coul not connect');
}

$statement = $pdo->prepare('select * from mytodo');

$statement->execute();

var_dump($statement);

require 'index.view.php';
