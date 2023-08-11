<?php

include '../connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `user_login` WHERE id=$id";
    $resl = mysqli_query($conn, $sql);
    if($resl)
    {
        //echo "Info Deleted Successfully";
       // header('location:list.php');
       echo '<script>';
       echo 'alert("User Data Deleted Succefully!");';
       echo 'window.location.href = "http://localhost/GarageMgtSystem/module/User/list.php"';
       echo '</script>';
    }
    else
    {
        die(mysqli_error($conn));

    }
}

?>