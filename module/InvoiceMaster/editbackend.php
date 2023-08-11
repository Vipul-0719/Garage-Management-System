<?php include '../connect.php';?>
<?php
error_reporting(0);
if (isset($_GET['submit']) && empty($_GET['productnm']) && empty($_GET['modelnm']) )
{
        echo '<script>';
        echo 'alert("Sorry, you have not filled required values");';
        echo 'window.location.href="http://localhost:8080/GarageMgtSystem/module/invoiceMaster/edit.php"';
        echo '</script>';
}
else{
$id=$_GET['id'];
$productnm = $_GET['productnm'];
$description = $_GET['description'];
$sprice = $_GET['sprice'];
$gst = $_GET['gst'];
$hsnno = $_GET['hsnno'];
$qty = $_GET['qty'];
$rate = $_GET['rate'];
$unit = $_GET['unit'];
$disc = $_GET['disc'];



$sql ="UPDATE `invoice_line` SET `productnm`='$productnm',`description`='$description',`sprice`='$sprice',`gst`='$gst',`hsnno`='$hsnno',`qty`='$qty',`rate`='$rate',`unit`='$unit',`disc`='$disc' WHERE `id`='$id';";
$res = mysqli_query($conn, $sql);

if($res)
    {
        echo '<script>';
        echo 'alert("Data Saved Successfully");';
        echo 'window.location.href="http://localhost:8080/GarageMgtSystem/module/invoiceMaster/list.php"';
        echo '</script>';

    }
    else
    {
        die(mysqli_error($conn));

    }
}
?>
 