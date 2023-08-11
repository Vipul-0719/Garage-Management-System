<?php

include '../connect.php';
include '../config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `customers` WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res)
    {
        echo '<script>';
        echo 'alert("Customer Data Deleted Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/customerMaster/list.php"';
        echo '</script>';
        // header('Location: '.base_url.'/module/customerMaster/list.php');  
    }
    else
    {
        die(mysqli_error($conn));

    }
}

?>
