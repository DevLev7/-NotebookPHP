<?php

$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']
];
//var_dump($data);die;

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "123");
$sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute($data);

header("Location: /2.11/index.php"); exit;