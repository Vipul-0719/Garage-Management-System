<?php include '../connect.php';?>
<?php
error_reporting(0);
    if(isset($_POST['submit']))
    {
        $ename = $_POST['ename'];
        $photo = $_FILES['photo']['name'];
        $emailaddress = $_POST['emailaddress'];
        $phno = $_POST['phno'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $country = $_POST['country'];

        $bname = $_POST['bname'];
        $baddress = $_POST['baddress'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $website = $_POST['website'];

        $joindate = $_POST['joindate'];
        $designation = $_POST['designation'];
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        $rdate = $_POST['rdate'];

        $bankName = $_POST['bankName'];
        $bankBranch = $_POST['bankBranch'];
        $acno = $_POST['acno'];
        $ifscCode = $_POST['ifscCode'];
        $aadharno = $_POST['aadharno'];
        $uaadhar = $_FILES['uaadhar']['name'];
        $pan = $_POST['pan'];
        $upan = $_FILES['upan']['name'];
        
        $query = "select max(id) from emp_master";
        $results = mysqli_query($conn,$query);


    foreach ($results as $r) {
    }
    $id = $r['max(id)'] + 1;
    $insertID =  $id;
    $folderPath = "D:/PHP/htdocs/GarageMgtSystem/Upload/employeeMaster/".$insertID;
    $path = "D:/PHP/htdocs/GarageMgtSystem/Upload/employeeMaster/".$insertID."/";

    $exist = is_dir($folderPath);
    if (!$exist) {
        mkdir($folderPath);
    }
    // $target_dir = "upload/product/";
    $target_file1 = $path . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
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
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file1)) {
            echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $target_file2 = $path . basename($_FILES["uaadhar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["uaadhar"]["tmp_name"]);
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
        if (move_uploaded_file($_FILES["uaadhar"]["tmp_name"], $target_file2)) {
            echo "The file " . htmlspecialchars(basename($_FILES["uaadhar"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $target_file3 = $path . basename($_FILES["upan"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["upan"]["tmp_name"]);
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
        if (move_uploaded_file($_FILES["upan"]["tmp_name"], $target_file3)) {
            echo "The file " . htmlspecialchars(basename($_FILES["upan"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
        
}



{
    {
        $x = array(
            'ename' => "'".$ename."'",
            'photo' => "'".$photo."'",
            'emailaddress' => "'".$emailaddress."'",
            'phno' => "'".$phno."'",
            'gender' => "'".$gender."'",
            'dob' => "'".$dob."'",
            'age' => "'".$age."'",
            'address' => "'".$address."'",
            'city' => "'".$city."'",
            'state' => "'".$state."'",
            'pincode' => "'".$pincode."'",
            'country' => "'".$country."'",

            'bname' => "'".$bname."'",
            'baddress' => "'".$baddress."'",
            'contact' => "'".$contact."'",
            'email' => "'".$email."'",
            'website' => "'".$website."'",

            'joindate' => "'".$joindate."'",
            'designation' => "'".$designation."'",
            'starttime' => "'".$starttime."'",
            'endtime' => "'".$endtime."'",
            'rdate' => "'".$rdate."'",

            'bankName' => "'".$bankName."'",
            'bankBranch' => "'".$bankBranch."'",
            'acno' => "'".$acno."'",
            'ifscCode' => "'".$ifscCode."'",
            'aadharno' => "'".$aadharno."'",
            'uaadhar' => "'".$uaadhar."'",
            'pan' => "'".$pan."'",
            'upan' => "'".$upan."'",
            
        );
    }
  

$col = implode(',',array_keys($x));
$val = implode(',',array_values($x));

$sql = "INSERT INTO emp_master ($col) VALUES ($val)";

        if($conn->query($sql) === TRUE)
        {
            //echo "Data Inserted Succesfully!";
           // header('location:list.php');
           echo '<script>';
        echo 'alert("Employee  Data Inserted Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/employeeMaster/list.php"';
        echo '</script>';

        }
        else
        {
            die(mysqli_error($conn));
        }
    }
?>