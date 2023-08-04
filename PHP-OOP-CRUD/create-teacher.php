<?php
use PhpOopCrud\Teacher;
include 'vendor/autoload.php';

//data store
$teacher= new Teacher();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $teacher->store($_POST);

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>HTML Table with Bootstrap Link</title>
</head>
<body>

<div class="container mt-4">
<form action="" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control"name="name" placeholder="Enter your name" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email" >
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea class="form-control"  name="address" rows="3" placeholder="Enter your address" ></textarea>
    </div>
    <div class="form-group">
      <label for="position">Position:</label>
      <input type="text" class="form-control" name="position" placeholder="Enter your position" >
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

<!-- Bootstrap JS and jQuery links (required for some Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

