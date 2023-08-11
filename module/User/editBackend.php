<!-- Update Query Page -->
<?php
include '../connect.php';
error_reporting(0);
$id = $_GET['id'];
$email = $_GET['email'];
$password = $_GET['password'];
$role = $_GET['role'];



// $query ="UPDATE `branch_master` SET `branchName`='$branchName',`branchLogo`='$branchLogo',`establishmentDate`='$establishmentDate',`gstNumber`='$gstNumber',     `cinNumbero`='$cinNumbero',
// `countryBranch`='$countryBranch',`stateBranch`= '$stateBranch',`cityBranch`='$cityBranch',`pincodeBranch`=$pincodeBranch,`address`='$address',        `ownerName`='$ownerName',`contactNumber`= $contactNumber,`designation`='$designation',`gender`='$gender',`email`='$email',       `bankName`='$bankName',`ifscCode`='$ifscCode',`bankBranch`='$bankBranch',`accountNumber`='$accountNumber' WHERE `id`=$id;";

//$sql="UPDATE `emp_master` SET `id`='$id', `ename` = '$ename', `photo`='$photo', `emailaddress` = '$emailaddress', `phno` = '$phno', `gender` = '$gender', `dob` = '$dob', `age` = '$age', `address` = '$address', `city` = '$city', `state` = '$state', `pincode` = '$pincode', `country` = '$country', `bname` = '$bname', `baddress` = '$baddress', `contact` = '$contact', `email` = '$email', `website` = '$website', `joindate` = '$joindate', `designation` = '$designation', `starttime` = '$starttime', `endtime` = '$endtime', `rdate` = 'rdate', `bankName` = '$bankName', `bankBranch` = '$bankBranch',`acno`='$acno', `ifscCode` = '$ifscCode', `aadharno` = '$aadharno',`uaadhar`='$uaadhar', `pan` = '$pan',`upan`='$upan' WHERE `emp_master`.`id` = $id";
$sql ="UPDATE `user_login` SET `id`='$id',`email`='$email',`password`='$password',`role`='$role', WHERE `id`='$id'";
$result = mysqli_query($conn,$sql);

if($result)
{
    //echo "Data Updated Succesfully!";
   // header('location:list.php');
   echo '<script>';
   echo 'alert("Uom Data Updated Succefully!");';
   echo 'window.location.href = "http://localhost/GarageMgtSystem/module/User/list.php"';
   echo '</script>';
}
else
{
    die(mysqli_error($conn));
}

?>


