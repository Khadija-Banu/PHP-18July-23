<?php
include 'config/dbconnection.php';

session_start();

if($_SESSION['is_login']){

}
else
    header('Location:Log-in.php');

$sql="select * from posts";
$statement= $pdo->query($sql);
$posts=$statement->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="m-5 p-5">
        <a href="create_post.php">
        <button class="btn btn-sm btn-primary">Create new product</button>
        </a>
      
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>Ser No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $id=1;?>
        <?php foreach($posts as $post): ?>
            
        <tr>
            <td><?= $id++ ?></td>
            <td><?= $post['title']?></td>
            <td><?= $post['description']?></td>
            <td>
                <button type="submit" class="btn btn-sm btn-success">Edit</button>
                <button type="submit" class="btn btn-sm btn-warning">Delete</button>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
  </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>