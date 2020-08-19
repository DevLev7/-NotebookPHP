<?php

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "123");
$statement = $pdo->prepare("SELECT * FROM tasks");//готовим sql запрос
$result = $statement->execute();//выполнить sql
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);//получить все данные с помощью ассоциативного массива

?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All Tasks</h1>
            <a href="create.php" class="btn btn-success">Add Task</a>
            <table class="table">
                <thead>
                <tr>
                   <th>ID</th>
                   <th>Title</th>
                   <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($tasks as $task):?>
                    <tr>
                        <td><?=$task['id'];?></td>
                        <td><?=$task['title'];?></td>
                        <td>
                            <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">
                                Show
                            </a>
                            <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>