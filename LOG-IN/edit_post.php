<?php

include 'config/dbconnection.php';
session_start();

if($_SESSION['is_login']){

}
else{
header('Location:Log-in.php');

}
    
$postId=$_GET['post_id'];
$sql="select * from posts where id=$postId";
$statement= $pdo->query($sql);
$post=$statement->fetch(PDO::FETCH_ASSOC);

  
if($_SERVER['REQUEST_METHOD']=='POST'){
    $title=$_POST['title'];
    $description=$_POST['description'];

    $sql="update posts set title='$title' , description='$description' where id='$postId'";

    $statement=$pdo->prepare($sql);
    $statement->execute();

    $_SESSION['session_msg']="<p class='alert alert-success'> update successfully</p>";
    header('Location:index.php');
}


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
    <div class="card-header">
        <h2>Product list</h2>
    <div class="card-body">
        <form action="" method="post">
            <input class="form-control" type="text" name="title" value=" <?= $post['title'] ?>" placeholder="enter title" required>
            <textarea class="form-control mt-3" name="description" cols="30" rows="10" placeholder="enter description">
                <?= $post['description'] ?>
            </textarea>
            <button class="btn btn-sm btn-success " type="submit">+ Update</button>
        </form>
    </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>