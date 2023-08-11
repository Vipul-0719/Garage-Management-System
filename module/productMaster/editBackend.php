 
<?php
include '../connect.php';
$id=$_GET['id'];
$productnm = $_GET['productnm'];
$productimg = $_GET['productimg'];
$serialno = $_GET['serialno'];
$modelnm = $_GET['modelnm'];
$partno = $_GET['partno'];
$saleprice = $_GET['saleprice'];
$gst = $_GET['gst'];
$hsnno = $_GET['hsnno'];
$mnfdate = $_GET['mnfdate'];
$warrenty = $_GET['warrenty'];


$sql ="UPDATE `product` SET `productnm`='$productnm',`productimg`='$productimg',`serialno`='$serialno',
`modelnm`='$modelnm',`partno`='$partno',`saleprice`='$saleprice',`gst`='$gst',`hsnno`='$hsnno',`mnfdate`='$mnfdate',
`warrenty`='$warrenty' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        // echo "Info Deleted Successfully";
        //header('location:list.php');
        echo '<script>';
        echo 'alert("Product Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/ProductMaster/list.php"';
        echo '</script>';
    }
    else
    {
        die(mysqli_error($conn));

    }
?>
 