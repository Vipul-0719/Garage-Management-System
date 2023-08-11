<?php
include '../connect.php';
            $id=$_GET['id'];
            $FName= 	$_GET['FName'];
			$MName= 	$_GET['MName'];
			$LName= 	$_GET['LName'];
			$Gender= $_GET['Gender'];
            $DOB= $_GET['DOB'];
			$Age= 	$_GET['Age'];
            $Phoneno= 	$_GET['Phoneno'];
			$Mobileno= 	$_GET['Mobileno'];
			$Email= $_GET['Email'];
            $Address= 	$_GET['Address'];
            $Street= 	$_GET['Street'];
            $City= 	$_GET['City'];
            $State= $_GET['State'];
			$Pincode= $_GET['Pincode'];
			$Country= $_GET['Country'];
    $sql ="UPDATE `customers` SET `FName`='$FName',`MName`='$MName',`LName`='$LName',`Gender`='$Gender',`DOB`='$DOB',`Age`='$Age',
        `Phoneno`='$Phoneno', `Mobileno`='$Mobileno', `Email`='$Email', `Address`='$Address', `Street`='$Street' ,`City`='$City', `State`='$State', 
		`Pincode`='$Pincode' ,`Country`='$Country' WHERE `id`='$id'";
     $res = mysqli_query($conn, $sql);
if($res)
    {
        // echo "Info Updated Successfully";
       // header('location:list.php');
       echo '<script>';
        echo 'alert("Customer Data Updated Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/customerMaster/list.php"';
        echo '</script>';

    }
    else
    {
        die(mysqli_error($conn));
    }
?>