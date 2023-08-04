<?php
use PhpOopCrud\Teacher;
include 'vendor/autoload.php';


$teacher= new Teacher();

$teachers=$teacher->index();

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
    <a href="create-teacher.php" class="btn btn-success">Create new Teacher</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Ser No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Position</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $serno = 1 ?>
        <?php foreach($teachers as $teacher): ?>
      <tr>
        <td><?= $serno++ ?></td>
        <td> <?= $teacher['name'] ?> </td>
        <td> <?= $teacher['email'] ?> </td>
        <td> <?= $teacher['address'] ?> </td>
        <td> <?= $teacher['position'] ?> </td>
        <td> <?= $teacher['password'] ?> </td>
        <td> 
            <a class="btn btn-primary btn-sm" href="edit-teacher.php?teacher_id=<?php echo $teacher['id'];?>">Edit</a>
            <a class="btn btn-success btn-sm">Show</a>
            <a class="btn btn-danger btn-sm" href="delete-teacher.php?id=<?php echo $teacher['id'];?>">Delete</a>
        </td>
     
      </tr>
    <?php endforeach; ?>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

<!-- Bootstrap JS and jQuery links (required for some Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

