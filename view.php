<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>VIEW</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Welcome to our CRUD</h1>
            <a href="register.php" class="text-white btn btn-primary">add new client</a>
        </div>
    <table class="table mt-5">
        <tr>
        <th>name</th>
        <th>email</th>
        <th>age</th>
        <div class="text-center">
        <th colspan="2">Action</th></div>
        </tr>
        <?php
        include('conection.php');
        include('delete.php');
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        while($row= mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['name'] ; ?></td>
            <td><?php echo $row['email'] ; ?></td>
            <td><?php echo $row['age'] ; ?></td>
            <td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-lg">update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-lg">delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>
