<?php

include '../connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `emp_master` WHERE id=$id";
    $resl = mysqli_query($conn, $sql);
    if($resl)
    {
        //echo "Info Deleted Successfully";
        //header('location:list.php');
        echo '<script>';
        echo 'alert("Emplyoee Data Deleted Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/employeeMaster/list.php"';
        echo '</script>';


    }
    else
    {
        die(mysqli_error($conn));

    }
}

?>