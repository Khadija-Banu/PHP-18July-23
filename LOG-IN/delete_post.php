<?php

include 'config/dbconnection.php';
session_start();

if($_SESSION['is_login']){

}
else{
header('Location:Log-in.php');

}

$postId=$_GET['post_id'];
$sql="delete from posts where id=$postId";
$statement=$pdo->prepare($sql);
$statement->execute();

$_SESSION['session_msg']="<p class='alert alert-danger'>Delete successful</p>";
header('Location:index.php');
   ?>