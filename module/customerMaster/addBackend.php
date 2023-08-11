<?php
		include '../connect.php';
			
			$FName= 	$_POST['FName'];
			$MName= 	$_POST['MName'];
			$LName= 	$_POST['LName'];
			$Gender= $_POST['Gender'];
            $DOB= $_POST['DOB'];
			$Age= 	$_POST['Age'];
            $Phoneno= 	$_POST['Phoneno'];
			$Mobileno= 	$_POST['Mobileno'];
			$Email= $_POST['Email'];
            $Address= 	$_POST['Address'];
            $Street= 	$_POST['Street'];
            $City= 	$_POST['City'];
            $State= 	$_POST['State'];
			$Pincode= 	$_POST['Pincode'];
			$Country= 	$_POST['Country'];
			

            $projectArray=array(
									
									
									'FName' 	 => "'".$FName."'",
									'MName' 	 => "'".$MName."'",
									'LName' 	 => "'".$LName."'",
									'Gender' 	 => "'".$Gender."'",
                                    'DOB' 	 => "'".$DOB."'",
									'Age' 	 => "'".$Age."'",
                                    'Phoneno' 	 => "'".$Phoneno."'",
									'Mobileno' 	 => "'".$Mobileno."'",
									'Email' 	 => "'".$Email."'",
                                    'Address' 	 => "'".$Address."'",
                                    'Street' 	 => "'".$Street."'",
                                    'City' 	 => "'".$City."'",
                                    'State' 	 => "'".$State."'",
									'Pincode' 	 => "'".$Pincode."'",
									'Country' 	 => "'".$Country."'",
									
									
									
					
				);
     $columns = implode(', ',array_keys($projectArray));
        $values = implode(', ',array_values($projectArray));
        // mysql_query("SET NAMES utf8");
        $sql="INSERT INTO `customers` ($columns) VALUES ($values)";
        // $sql="INSERT INTO 'dealers'(dname,dphone,daddress) values (N'$dname',N'$dphone',N'$daddress')";
		if ($conn->query($sql) === TRUE)
		{
			// exit();
    
		//echo 'alert(" Information Saved Successfully!");';
		echo '<script>';
        echo 'alert("Customer Data Inserted Succefully!");';
        echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/customerMaster/list.php"';
        echo '</script>';

		}
		else
		{
    	echo("".$conn->error);
    	echo 'alert("Error Occured! Record not Saved!");';
		
		}	
			
?>