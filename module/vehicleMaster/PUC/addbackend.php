<?php
		include '../../connect.php';
		//$vname= 	(explode(" ",$_POST['vname']));
		$vname= 	$_POST['vname'];
			$lnumber= 	$_POST['lnumber'];
			$pucnumber= 	$_POST['pucnumber'];
			$cname= 	$_POST['cname'];
			$caddress= 	$_POST['caddress'];
			$tdate= 	$_POST['tdate'];
			$valid= 	$_POST['valid'];
			$res= 	$_POST['res'];
			$freason= 	$_POST['freason'];
			//print_r($vname);
			//exit;
			
  
  
  $projectArray=array(
                                     //'id' => "'".$vname."'",
	                                'vname' 	 => "'".$vname."'",
									'lnumber' 	 => "'".$lnumber."'",
									'pucnumber' 	 => "'".$pucnumber."'",
									'cname' 	 => "'".$cname."'",
									'caddress' 	 => "'".$caddress."'",
									'tdate' 	 => "'".$tdate."'",
									'valid' 	 => "'".$valid."'",
									'res' 	 => "'".$res."'",
									'freason' 	 => "'".$freason."'",
									
									
					
				);
                 $columns = implode(', ',array_keys($projectArray));
        $values = implode(', ',array_values($projectArray));
        // mysql_query("SET NAMES utf8");
        $sql="INSERT INTO `pucinfo` ($columns) VALUES ($values)";
       // $sql="INSERT INTO 'info'(vname,rdate,vtype,vcolor,ftype,nplate,mname,myear,ngear,oreading,cname,pnumber,cpayable,pdocument,sdate,edate,dtype,document,exdate,email,cnumber) values (N'$vname',N'$rdate',N'$vtype' N'$vcolor',N'$ftype',N'$nplate',N'$mname',N'$myear',N'$ngear',N'$oreading',N'$cname',N'$pnumber',N'$cpayable',N'$pdocument',N'$sdate',N'$edate',N'$dtype',N'$document',N'$exdate',N'$email',N'$cnumber')";
		if ($conn->query($sql) === TRUE)
		{
		
    	
		//echo 'alert("Table Information Saved Successfully!");';
		//header('location:list.php');
		echo '<script>';
        echo 'alert("PUC Data Inserted Succefully!");';
        echo 'window.location.href = "http://localhost/GarageMgtSystem/module/VehicleMaster/PUC/list.php"';
        echo '</script>';
		}
		else
		{
    	
		
    	echo 'alert("Error Occured! Record not Saved!");';
		
		}	
			
?>