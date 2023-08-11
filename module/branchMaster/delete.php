<?php

include '../connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `branch_master` WHERE id=$id";
    $resl = mysqli_query($conn, $sql);
    if ($resl) {
        echo '<script>';
        echo 'alert("Branch Data Deleted Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/list.php"';
        echo '</script>';
       
    } else {
        die(mysqli_error($conn));
    }
}
