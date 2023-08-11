<?php

include '../../connect.php';

if (isset($_POST['submit'])) 
{
        $service = $_POST['service'];
        $image = $_FILES['image']["name"];
        $cost = $_POST['cost'];
        $gst = $_POST['gst'];
        $charges = $_POST['charges'];
        $saccode = $_POST['saccode'];
        $alert = $_POST['alert'];
        $date = $_POST['date'];


        $query = "select max(id) from service";
        $results = mysqli_query($conn, $query);
    
        foreach ($results as $r) {
        }
        $id = $r['max(id)'] + 1;
        $insertID =  $id;
        $folderPath = "D:/PHP/htdocs/GarageMgtSystem/Upload/serviceMaster/addService/".$insertID;
        $path = "D:/PHP/htdocs/GarageMgtSystem/Upload/serviceMaster/addService/".$insertID."/";
    
        $exist = is_dir($folderPath);
        if (!$exist) {
            mkdir($folderPath);
        }
        // $target_dir = "upload/product/";
        $target_file1 = $path . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
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
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
}

{
        {
        $InfoArray = array(
                'service'       => "'" . $service . "'",
                'image'         => "'" . $image . "'",
                'cost'          => "'" . $cost ."'",
                'gst'           => "'" . $gst ."'",
                'charges'       => "'" . $charges . "'",
                'saccode'       => "'" . $saccode ."'",
                'alert'       => "'" . $alert ."'",
                'date'          => "'" . $date . "'"
        );

        $col = implode(',', array_keys($InfoArray));
        $val = implode(',', array_values($InfoArray));

        $sql = "INSERT INTO `service` ($col) VALUES($val)";

        if ($conn->query($sql) === TRUE) {

             echo '<script>';
             echo 'alert("Service Data Inserted Succefully!");';
             echo 'window.location.href = ';
             echo '</script>';
        } 
        else {
                echo ("" . $conn->error);
                echo 'alert("Error Occured! Record not Saved!");';
                // echo 'window.location.href = "./productList.php"';      
        }


        

        }
}
?>