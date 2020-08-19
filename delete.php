<?php
$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "123");
$sql ='DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();


header('Location: /2.11/index.php');