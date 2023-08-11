<?php

include '../connect.php';

if (isset($_POST['submit'])) {
        $productnm = $_POST['productnm'];
        $productimg = $_FILES['productimg']["name"];
        $serialno = $_POST['serialno'];
        $modelnm = $_POST['modelnm'];
        $partno = $_POST['partno'];
        $saleprice = $_POST['saleprice'];
        $gst = $_POST['gst'];
        $hsnno = $_POST['hsnno'];
        $mnfdate = $_POST['mnfdate'];
        $warrenty = $_POST['warrenty'];

        $query = "select max(id) from product";
        $results = mysqli_query($conn, $query);

        foreach ($results as $r) {
        }
        $id = $r['max(id)'] + 1;
        $insertID =  $id;
        $folderPath = "D:/PHP/htdocs/GarageMgtSystem/Upload/productMaster/" . $insertID;
        $path = "D:/PHP/htdocs/GarageMgtSystem/Upload/productMaster/" . $insertID . "/";

        $exist = is_dir($folderPath);
        if (!$exist) {
                mkdir($folderPath);
        }
        // $target_dir = "upload/product/";
        $target_file1 = $path . basename($_FILES["productimg"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["productimg"]["tmp_name"]);
                if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                }
        }

        if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
        } else {
                if (move_uploaded_file($_FILES["productimg"]["tmp_name"], $target_file1)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["productimg"]["name"])) . " has been uploaded.";
                } else {
                        echo "Sorry, there was an error uploading your file.";
                }
        }


        $InfoArray = array(
                'productnm'       => "'" . $productnm . "'",
                'productimg'         => "'" . $productimg . "'",
                'serialno'          => "'" . $serialno . "'",
                'modelnm'           => "'" . $modelnm . "'",
                'partno'       => "'" . $partno . "'",
                'saleprice'       => "'" . $saleprice . "'",
                'gst'       => "'" . $gst . "'",
                'hsnno'       => "'" . $hsnno . "'",
                'mnfdate'          => "'" . $mnfdate . "'",
                'warrenty'       => "'" . $warrenty . "'"
        );

        $col = implode(',', array_keys($InfoArray));
        $val = implode(',', array_values($InfoArray));

        $sql = "INSERT INTO `product` ($col) VALUES($val)";

        if ($conn->query($sql) === TRUE) {

                // echo 'alert("Information Saved Successfully!");';

               // header('location:list.php');
               echo '<script>';
               echo 'alert("Product Data Inserted Succefully!");';
               echo 'window.location.href = "http://localhost/GarageMgtSystem/module/ProductMaster/list.php"';
               echo '</script>';
        } else {
                echo ("" . $conn->error);
                echo 'alert("Error Occured! Record not Saved!");';
                // echo 'window.location.href = "./productList.php"';      
        }


        echo 'New record added Successfully';
}
