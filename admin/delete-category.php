<?php 
    include '../config.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM category WHERE category_id = $id";
    if (mysqli_query($conn,$sql)) {
        header("Location:{$hostname}admin/category.php");
    }
    mysqli_close($conn);
?>