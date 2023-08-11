<?php

include '../connect.php';

if (isset($_POST['submit'])) {
        $uomname = $_POST['uomname'];
        $description = $_POST['description'];



        $InfoArray = array(
                'uomname'       => "'" . $uomname . "'",
                'description'         => "'" . $description . "'"
        );

        $col = implode(',', array_keys($InfoArray));
        $val = implode(',', array_values($InfoArray));

        $sql = "INSERT INTO `uominfo` ($col) VALUES($val)";

        if ($conn->query($sql) === TRUE) {

                // echo 'alert("Information Saved Successfully!");';
                
                //header('location:list.php');
                echo '<script>';
               echo 'alert("Uom Data Inserted Succefully!");';
               echo 'window.location.href = "http://localhost/GarageMgtSystem/module/UomMaster/list.php"';
               echo '</script>';
        } else {
                echo ("" . $conn->error);
                echo 'alert("Error Occured! Record not Saved!");';
                // echo 'window.location.href = "./productList.php"';      
        }


        echo 'New record added Successfully';
}
