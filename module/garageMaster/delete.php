<?php

include '../connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `garageinfo` WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res)
    {
        //echo "Info Deleted Successfully";
        //header('location:list.php');
        echo '<script>';
        echo 'alert("Garage Data Deleted Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/garageMaster/list.php"';
        echo '</script>';


    }
    else
    {
        die(mysqli_error($conn));

    }
}

?>
