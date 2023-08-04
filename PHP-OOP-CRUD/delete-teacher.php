<?php
use PhpOopCrud\Teacher;
include 'vendor/autoload.php';

$teacher=new Teacher();
$id = $_GET['id'];
$teacher->delete($id);




?>