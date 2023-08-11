<?php
		include '../../connect.php';
			
        $cpayable= 	$_POST['cpayable'];
		$vname= 	$_POST['vname'];
			$FName= 	$_POST['FName'];
			$vnumber= 	$_POST['vnumber'];
			$pnumber= 	$_POST['pnumber'];
			$cname= 	$_POST['cname'];
			$pdocument= $_FILES["pdocument"]["name"];
           $sdate= 	$_POST['sdate'];
			$edate= 	$_POST['edate'];
			//print_r($pdocument);
			//exit;

			$query = "select max(id) from insuranceinfo";
			$results = mysqli_query($conn, $query);
		
			foreach ($results as $r) {
			}
			$id = $r['max(id)'] + 1;
			$insertID =  $id;
			$folderPath = "D:/PHP/htdocs/GarageMgtSystem/Upload/branchMaster/".$insertID;
			$path = "D:/PHP/htdocs/GarageMgtSystem/Upload/branchMaster/".$insertID."/";
		
			$exist = is_dir($folderPath);
			if (!$exist) {
				mkdir($folderPath);
			}
			// $target_dir = "upload/product/";
			$target_file1 = $path . basename($_FILES["pdocument"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if (isset($_POST["submit"])) {
				$check = getimagesize($_FILES["pdocument"]["tmp_name"]);
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
				if (move_uploaded_file($_FILES["pdocument"]["tmp_name"], $target_file1)) {
					echo "The file " . htmlspecialchars(basename($_FILES["pdocument"]["name"])) . " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
            
  
  
  $projectArray=array(
									
									
									'cname' 	 => "'".$cname."'",
									'pnumber' 	 => "'".$pnumber."'",
									'vname' 	 => "'".$vname."'",
									'FName' 	 => "'".$FName."'",
									'cpayable' 	 => "'".$cpayable."'",
									'vnumber' 	 => "'".$vnumber."'",
									'pdocument'  => "'".$pdocument."'",
                                    'sdate' 	 => "'".$sdate."'",
									'edate' 	 => "'".$edate."'",
									
									
					
				);
                 $columns = implode(', ',array_keys($projectArray));
        $values = implode(', ',array_values($projectArray));
        // mysql_query("SET NAMES utf8");
        $sql="INSERT INTO `insuranceinfo` ($columns) VALUES ($values)";
       // $sql="INSERT INTO 'info'(vname,rdate,vtype,vcolor,ftype,nplate,mname,myear,ngear,oreading,cname,pnumber,cpayable,pdocument,sdate,edate,dtype,document,exdate,email,cnumber) values (N'$vname',N'$rdate',N'$vtype' N'$vcolor',N'$ftype',N'$nplate',N'$mname',N'$myear',N'$ngear',N'$oreading',N'$cname',N'$pnumber',N'$cpayable',N'$pdocument',N'$sdate',N'$edate',N'$dtype',N'$document',N'$exdate',N'$email',N'$cnumber')";
		if ($conn->query($sql) === TRUE)
		{
		
    	
		//echo 'alert("Table Information Saved Successfully!");';
		//header('location:list.php');
		echo '<script>';
        echo 'alert("Insurance Data Inserted Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/VehicleMaster/Insurance/list.php"';
        echo '</script>';
		
		}
		else
		{
    	
		
    	echo 'alert("Error Occured! Record not Saved!");';
		
		}	
			
?>