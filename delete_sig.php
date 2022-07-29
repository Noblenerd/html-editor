<?php
    include('connect.php');
    $id = $_GET['id'];
    
    mysqli_query($con, "DELETE FROM signatures WHERE ID='$id'") or die(mysqli_error($con));
    header('location:edit.php?dell');
?>