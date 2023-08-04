<?php

include 'config/dbconnection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $birth=$_POST['birth'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
 
    $sql = "insert into users(name,birth,email,phone) values('$name','$birth', '$email', '$phone')";
    $stmt = $pdo->prepare($sql); 
    $stmt->execute();
    
    //session start
    session_start();
    $_SESSION['is_login']=true;
    $_SESSION['user_name']=$name;

    header('Location: index.php');
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-info m-5">
   <form action="" method="POST"class="user">
    <section class="vh-75 gradient-custom">
  <div class="container py-5 h-75">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="name"class="form-control form-control-lg" />
                    <label class="form-label" for="firstName"> Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 d-flex align-items-center">

<div class="form-outline datepicker w-100">
  <input type="text" name="birth" class="form-control form-control-lg" id="birthdayDate" />
  <label for="birthdayDate" class="form-label">Password</label>
</div>

</div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <!-- <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg" name="subject">
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
              

                </div>
              </div> -->
              <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
           

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>