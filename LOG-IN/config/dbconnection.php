


<?php

$host='localhost';
$db='Log_in';
$user='root';
$password='khadija203';

$dsn="mysql:host=$host;dbname=$db;charset=UTF8";

try{
    $pdo= new PDO($dsn,$user,$password);

    if($pdo){
      
    }
}catch (PDOException $e) {
	echo $e->getMessage();
}

