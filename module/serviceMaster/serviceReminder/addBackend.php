<?php

include '../../connect.php';

if (isset($_POST['submit'])) {
        $customernm = $_POST['customernm'];
        $vehiclenm = $_POST['vehiclenm'];
        $service = $_POST['service'];
        $date = $_POST['date'];


        $InfoArray = array(
                'customernm'       => "'" . $customernm . "'",
                'vehiclenm'         => "'" . $vehiclenm . "'",
                'service'          => "'" . $service ."'",
                'date'          => "'" . $date . "'"
        );

        $col = implode(',', array_keys($InfoArray));
        $val = implode(',', array_values($InfoArray));

        $sql = "INSERT INTO `serreminder` ($col) VALUES($val)";

        if ($conn->query($sql) == TRUE) {

                // echo 'alert("Information Saved Successfully!");';
                
                header('location:list.php');
        } else {
                echo ("" . $conn->error);
                echo 'alert("Error Occured! Record not Saved!");';
                // echo 'window.location.href = "./productList.php"';      
        }


        echo 'New record added Successfully';
}
