<?php include '../connect.php';?>
<?php
    if(isset($_POST['submit'])&& empty($_POST['vendorName'])&& empty($_POST['Cno'])&& empty($_POST['VenEmail'])&& empty($_POST['gstNumber']) && empty($_POST['VenEmail'])
    && empty($_POST['country'])&& empty($_POST['street'])
    && empty($_POST['contactNumber'])
    && empty($_POST['bankName'])&& empty($_POST['ifscCode'])&& empty($_POST['bankBranch'])
    && empty($_POST['accountNumber']))
    {
    echo '<script>';
    echo 'alert("Sorry, you have not required values");';
    echo 'window.location.href="http://localhost:8080/GarageMgtSystem/module/vendorMaster/add.php"';
    echo '</script>';
    }
    else{
        $vendorName = $_POST['vendorName'];
        $Cno = $_POST['Cno'];
        $RegNumber = $_POST['RegNumber'];
		$VenEmail = $_POST['VenEmail'];
        $gstNumber = $_POST['gstNumber'];
        

        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $street = $_POST['street'];

        $bankName = $_POST['bankName'];
        $ifscCode = $_POST['ifscCode'];
        $bankBranch = $_POST['bankBranch'];
        $accountNumber = $_POST['accountNumber'];
        
        $query = "select max(id) from vendor_master";
        $results = mysqli_query($conn, $query);
    
	}



{
    {
        $x = array(
            
            'vendorName' => "'".$vendorName."'",
            'Cno' => "'".$Cno."'",
            'RegNumber' => "'".$RegNumber."'",
			'VenEmail' => "'".$VenEmail."'",
            'gstNumber' => "'".$gstNumber."'",
            

            'country' => "'".$country."'",
            'state' => "'".$state."'",
            'city' => "'".$city."'",
            'pincode' => "'".$pincode."'",
            'street' => "'".$street."'",

           
            'bankName' => "'".$bankName."'",
            'ifscCode' => "'".$ifscCode."'",
            'bankBranch' => "'".$bankBranch."'",
            'accountNumber' => "'".$accountNumber."'",
            
        );
    

$col = implode(',',array_keys($x));
$val = implode(',',array_values($x));

$sql = "INSERT INTO vendor_master ($col) VALUES ($val)";

        if($conn->query($sql) === TRUE)
        {
            echo '<script>';
            echo 'alert("data saved successfully");';
            echo 'window.location.href="http://localhost:8080/GarageMgtSystem/module/vendorMaster/list.php"';
            echo '</script>';  
        }
        else
        {
            die(mysqli_error($conn));
        }
    }
	
}
?>