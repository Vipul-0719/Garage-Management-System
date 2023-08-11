<!-- Update Query Page -->

<?php
include '../connect.php';

if (isset($_POST['update'])) {
    $id = $_REQUEST['id'];
    // echo $id;exit;
    $branchName = $_POST['branchName'];
    // $branchLogo = $_POST['branchLogo']['name'];
    $branchLogo = $_FILES['branchLogo']['name'];
    $establishmentDate = $_POST['establishmentDate'];
    $gstNumber = $_POST['gstNumber'];
    $cinNumber = $_POST['cinNumber'];

    $countryBranch = $_POST['countryBranch'];
    $stateBranch = $_POST['stateBranch'];
    $cityBranch = $_POST['cityBranch'];
    $pincodeBranch = $_POST['pincodeBranch'];
    $addressBranch = $_POST['addressBranch'];

    $ownerName = $_POST['ownerName'];
    $contactNumber = $_POST['contactNumber'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $bankName = $_POST['bankName'];
    $ifscCode = $_POST['ifscCode'];
    $bankBranch = $_POST['bankBranch'];
    $accountNumber = $_POST['accountNumber'];

    $target = "E:/xampp/htdocs/GarageMgtSystem/Upload/branchMaster/" . basename($branchLogo);

    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES['branchLogo']['tmp_name'], $target)) {
        $query1 = "UPDATE `branch_master` SET `branchLogo` = '$branchLogo' WHERE `branch_master`.`id` = $id";
        $result1 = mysqli_query($conn, $query1);
        $msg = "Image Uploaded Successfully";
        echo $msg;
        // try{
    }
    else{
        $msg = "Failed to upload image";
        echo $msg;
    }

    $query2 = "UPDATE `branch_master` SET `branchName` = '$branchName',`establishmentDate` = '$establishmentDate', `gstNumber` = '$gstNumber', `cinNumber` = '$cinNumber', `countryBranch` = '$countryBranch', `stateBranch` = '$stateBranch', `cityBranch` = '$cityBranch', `pincodeBranch` = '$pincodeBranch', `addressBranch` = '$addressBranch', `ownerName` = '$ownerName', `contactNumber` = '$contactNumber', `gender` = '$gender', `email` = '$email', `bankName` = '$bankName', `ifscCode` = '$ifscCode', `bankBranch` = '$bankBranch', `accountNumber` = '$accountNumber' WHERE `branch_master`.`id` = $id";

    // echo $query;
    // exit;
    $result2 = mysqli_query($conn, $query2);
    // }catch(mysqli_sql_exception $e){
    // var_dump($e);
    // exit;
    // }

    if ($result2) {
        //echo "Data Updated Succesfully!";
        // header('location:list.php');
        echo '<script>';
        echo 'alert("Branch Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/list.php"';
        echo '</script>';
    } else {
        die(mysqli_error($conn));
    }
}

?>