
<?php
    include('conection.php');
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $sql="SELECT * FROM users WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
    }
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $password=$_POST['password'];
        $sql="UPDATE USERS SET name='$name',email='$email',age=$age,password='$password' WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        if ($result) {
            header('location:view.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    <form class=" form-group" method="POST">
        <label for="name" class="form-label p-xxl-2">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>"  required>
        <label for="email" class="form-label p-xxl-2">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>" required>
        <label for="age" class="form-label p-xxl-2">Age</label>
        <input type="number" name="age" class="form-control" value="<?php echo $row['age']  ?>" required>
        <label for="password" class="form-label p-xxl-2" >Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $row['password']  ?>" required>
        <!-- <label for="password_confirmation" class="form-label p-xxl-2">Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control p-xxl-2" placeholder="confirm password" required> -->
        <div class="text-center mt-3">
        <input type="submit" value="update user" name="submit" class="btn btn-outline-primary btn-lg text-center">
        </div>
    </div>
    <?php
    
    ?>
    </form>
    </div>
</body>
</html>

