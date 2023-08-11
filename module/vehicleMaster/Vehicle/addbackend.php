<?php
		include '../../connect.php';
			$vname= 	$_POST['vname'];
			$FName= 	$_POST['FName'];
			$rdate= 	$_POST['rdate'];
			$vtype= 	$_POST['vtype'];
			$vcolor= 	$_POST['vcolor'];
			$ftype= 	$_POST['ftype'];
			$vnumber= 	$_POST['vnumber'];
			$cnumber= 	$_POST['cnumber'];
			$mname= 	$_POST['mname'];
            $myear= 	$_POST['myear'];
			$enumber= 	$_POST['enumber'];
			$ngear= 	$_POST['ngear'];
			$oreading= 	$_POST['oreading'];
			
				 
			
  
  
  $projectArray=array(
									
									'vname' 	 => "'".$vname."'",
									'FName' 	 => "'".$FName."'",
									'rdate' 	 => "'".$rdate."'",
									'vtype' 	 => "'".$vtype."'",
									'vcolor' 	 => "'".$vcolor."'",
									'ftype' 	 => "'".$ftype."'",
									'vnumber' 	 => "'".$vnumber."'",
									'cnumber' 	 => "'".$cnumber."'",
									'mname' 	 => "'".$mname."'",
                                    'myear' 	 => "'".$myear."'",
									'enumber' 	 => "'".$enumber."'",
									'ngear' 	 => "'".$ngear."'",
									'oreading' 	 => "'".$oreading."'",
									
									
					
				);
                 $columns = implode(', ',array_keys($projectArray));
        $values = implode(', ',array_values($projectArray));
        // mysql_query("SET NAMES utf8");
        $sql="INSERT INTO `vehicleinfo` ($columns) VALUES ($values)";
       // $sql="INSERT INTO 'info'(vname,rdate,vtype,vcolor,ftype,nplate,mname,myear,ngear,oreading,cname,pnumber,cpayable,pdocument,sdate,edate,dtype,document,exdate,email,cnumber) values (N'$vname',N'$rdate',N'$vtype' N'$vcolor',N'$ftype',N'$nplate',N'$mname',N'$myear',N'$ngear',N'$oreading',N'$cname',N'$pnumber',N'$cpayable',N'$pdocument',N'$sdate',N'$edate',N'$dtype',N'$document',N'$exdate',N'$email',N'$cnumber')";
		if ($conn->query($sql) === TRUE)
		{
		
    	//header('location:list.php');
		//echo 'alert("Table Information Saved Successfully!");';
		echo '<script>';
        echo 'alert("Vehicle Data Inserted Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/VehicleMaster/Vehicle/list.php"';
        echo '</script>';
		}
		else
		{
    	
		
    	echo 'alert("Error Occured! Record not Saved!");';
		
		}	
			
?>