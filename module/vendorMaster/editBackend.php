<?php include '../connect.php';?>
<?php
error_reporting(0);
   if(isset($_POST['submit'])&& empty($_POST['vendorName'])&& empty($_POST['Cno'])&& empty($_POST['VenEmail'])&& empty($_POST['gstNumber']) && empty($_POST['VenEmail'])
    && empty($_POST['country'])&& empty($_POST['street'])
    
    && empty($_POST['bankName'])&& empty($_POST['ifscCode'])&& empty($_POST['bankBranch'])
    && empty($_POST['accountNumber']))
    {
    echo '<script>';
    echo 'alert("Sorry, you have not required values");';
    echo 'window.location.href="http://localhost:8080/GarageMgtSystem/module/vendorMaster/edit.php"';
    echo '</script>';
    }
    else{
$id = $_GET['id'];
$vendorName = $_GET['vendorName'];
$Cno = $_GET['Cno'];
$RegNumber = $_GET['RegNumber'];
$VenEmail = $_GET['VenEmail'];
$gstNumber = $_GET['gstNumber'];

$country = $_GET['country'];
$state = $_GET['state'];
$city = $_GET['city'];
$pincode = $_GET['pincode'];
$street = $_GET['street'];

$bankName = $_GET['bankName'];
$ifscCode = $_GET['ifscCode'];
$bankBranch = $_GET['bankBranch'];
$accountNumber = $_GET['accountNumber'];

// $query ="UPDATE `branch_master` SET `branchName`='$branchName',`branchLogo`='$branchLogo',`establishmentDate`='$establishmentDate',`gstNumber`='$gstNumber',     `cinNumbero`='$cinNumbero',
// `countryBranch`='$countryBranch',`stateBranch`= '$stateBranch',`cityBranch`='$cityBranch',`pincodeBranch`=$pincodeBranch,`address`='$address',        `ownerName`='$ownerName',`contactNumber`= $contactNumber,`designation`='$designation',`gender`='$gender',`email`='$email',       `bankName`='$bankName',`ifscCode`='$ifscCode',`bankBranch`='$bankBranch',`accountNumber`='$accountNumber' WHERE `id`=$id;";

$sql="UPDATE `vendor_master` SET `vendorName` = '$vendorName',, `Cno` = '$Cno','RegNumber'=$RegNumber,`VenEmail` = '$VenEmail', `gstNumber` = '$gstNumber',  `country` = '$country', `state` = '$state', `city` = '$city', `pincode` = '$pincode', `street` = '$street',  `contactNumber` = '$contactNumber', `designation` = '$designation', `gender` = '$gender', `email` = '$email', `bankName` = '$bankName', `ifscCode` = '$ifscCode', `bankBranch` = '$bankBranch',`accountNumber`='$accountNumber' WHERE `branch_master`.`id` = $id";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo '<script>';
    echo 'alert("Data Updated Successfully");';
    echo 'window.location.href="http://localhost:8080/GarageMgtSystem/module/vendorMaster/list.php"';
    echo '</script>';
}
else
{
    die(mysqli_error($conn));
}
}

?>


