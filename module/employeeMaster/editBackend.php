<!-- Update Query Page -->
<?php
include '../connect.php';
error_reporting(0);
$id = $_GET['id'];
$ename = $_GET['ename'];
$photo = $_GET['photo'];
$emailaddress = $_GET['emailaddress'];
$phno = $_GET['phno'];
$gender = $_GET['gender'];
$dob = $_GET['dob'];
$age = $_GET['age'];
$address = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];
$pincode = $_GET['pincode'];
$country = $_GET['country'];

$bname = $_GET['bname'];
$baddress = $_GET['baddress'];
$contact = $_GET['contact'];
$email = $_GET['email'];
$website = $_GET['website'];

$joindate = $_GET['joindate'];
$designation = $_GET['designation'];
$starttime = $_GET['starttime'];
$endtime = $_GET['endtime'];
$rdate = $_GET['rdate'];

$bankName = $_GET['bankName'];
$bankBranch = $_GET['bankBranch'];
$acno = $_GET['acno'];
$ifscCode = $_GET['ifscCode'];
$aadharno = $_GET['aadharno'];
$uaadhar = $_GET['uaadhar'];
$pan = $_GET['pan'];
$upan = $_GET['upan'];


// $query ="UPDATE `branch_master` SET `branchName`='$branchName',`branchLogo`='$branchLogo',`establishmentDate`='$establishmentDate',`gstNumber`='$gstNumber',     `cinNumbero`='$cinNumbero',
// `countryBranch`='$countryBranch',`stateBranch`= '$stateBranch',`cityBranch`='$cityBranch',`pincodeBranch`=$pincodeBranch,`address`='$address',        `ownerName`='$ownerName',`contactNumber`= $contactNumber,`designation`='$designation',`gender`='$gender',`email`='$email',       `bankName`='$bankName',`ifscCode`='$ifscCode',`bankBranch`='$bankBranch',`accountNumber`='$accountNumber' WHERE `id`=$id;";

//$sql="UPDATE `emp_master` SET `id`='$id', `ename` = '$ename', `photo`='$photo', `emailaddress` = '$emailaddress', `phno` = '$phno', `gender` = '$gender', `dob` = '$dob', `age` = '$age', `address` = '$address', `city` = '$city', `state` = '$state', `pincode` = '$pincode', `country` = '$country', `bname` = '$bname', `baddress` = '$baddress', `contact` = '$contact', `email` = '$email', `website` = '$website', `joindate` = '$joindate', `designation` = '$designation', `starttime` = '$starttime', `endtime` = '$endtime', `rdate` = 'rdate', `bankName` = '$bankName', `bankBranch` = '$bankBranch',`acno`='$acno', `ifscCode` = '$ifscCode', `aadharno` = '$aadharno',`uaadhar`='$uaadhar', `pan` = '$pan',`upan`='$upan' WHERE `emp_master`.`id` = $id";
$sql ="UPDATE `emp_master` SET `id`='$id',`ename`='$ename',`photo`='$photo',`emailaddress`='$emailaddress',
 `phno`='$phno',`gender`='$gender',`dob`='$dob',`age`='$age',`address`='$address',`city`='$city',`state` = '$state',`pincode`='$pincode',
 `country`='$country',`bname`='$bname',`baddress`='$baddress',`contact`='$contact',`email`='$email',`website`='$website',`joindate`='$joindate',
 `designation`='$designation',`starttime`='$starttime',`endtime`='$endtime',`rdate`='$rdate',`bankName`='$bankName',`bankBranch`='$bankBranch',`acno`='$acno',
 `ifscCode`='$ifscCode',`aadharno`='$aadharno',`uaadhar`='$uaadhar',`pan`='$pan',`upan`='$upan' WHERE `id`='$id'";
$result = mysqli_query($conn,$sql);

if($result)
{
    //echo "Data Updated Succesfully!";
   // header('location:list.php');
   echo '<script>';
        echo 'alert("Emplyoee Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/employeeMaster/list.php"';
        echo '</script>';

}
else
{
    die(mysqli_error($conn));
}

?>


