<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="custom.css">
    <title>REGISTER</title>
</head>
<body>
    <div class="container ">

    <form class=" form-group" method="POST">
        <label for="name" class="form-label p-xxl-2">Name</label>
        <input type="text" name="name" class="form-control" placeholder="enter name"  required>
        <label for="email" class="form-label p-xxl-2">Email</label>
        <input type="email" name="email" class="form-control" placeholder="enter email" required>
        <label for="age" class="form-label p-xxl-2">Age</label>
        <input type="number" name="age" class="form-control" placeholder="enter age" required>
        <label for="password" class="form-label p-xxl-2" >Password</label>
        <input type="password" name="password" class="form-control" placeholder="enter password" required>
        <div class="text-center mt-3">
        <input type="submit" value="submit" name="submit" class="btn btn-outline-primary btn-lg text-center">
        </div>
        </form>
    </div>
</body>
</html>
<?php
    include('conection.php');
    if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $password=$_POST['password'];
        
             $sql="INSERT INTO users(name,email,age,password) VALUES('$name','$email','$age','$password')";
             $result=mysqli_query($conn,$sql);
             if ($result) {
                echo"<script>window.alert('data inserted successfully')</script>";
                header('location:view.php');
             }
    }
?>