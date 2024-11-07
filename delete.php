<?php
include('conection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql= "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>window.alert('data inserted successfully')</script>";
        header('location:view.php');
    } else{
        echo "<script>window.alert('deleted successfully')</script>";
    }
}
?>