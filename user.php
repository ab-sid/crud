<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into tbl_crud (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if ($result) {
        header('location:view.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
  <!-- FORM START -->
  <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your email">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" name="password" class="form-control" placeholder="Enter your password">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  <!-- FORM END -->
  </div>  
<script src=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
