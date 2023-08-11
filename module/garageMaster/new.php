<?php include '../connect.php';?>
<?php include '../config.php';?>
<?php
error_reporting(0);
        if(isset($_POST['submit'])&& empty($_POST['gname'])&& empty($_POST['oname'])&& empty($_POST['contact'])
        && empty($_POST['email'])&& empty($_POST['website'])
        && empty($_POST['bpincode'])&& empty($_POST['bstate'])&& empty($_POST['bcountry'])&& empty($_POST['semail'])
        && empty($_POST['sadd'])&& empty($_POST['scity'])&& empty($_POST['spincode'])&& empty($_POST['sstate'])&& empty($_POST['scountry'])
        && empty($_POST['pemail']))
        {
            echo '<script>';
            echo 'alert("Sorry, you have not required values");';
            echo 'window.location.href="http://localhost/GarageMgtSystem/module/garageMaster/add.php"';
            echo '</script>';
        }
         else{ 
            $logoimg= 	$_FILES['logoimg']['name'];
			$gname= 	$_POST['gname'];
			$oname=     $_POST['oname'];
			$contact= 	$_POST['contact'];
			$email= 	$_POST['email'];
			$website= 	$_POST['website'];

			$badd=      $_POST['badd'];
            $bcity= 	$_POST['bcity'];
            $bpincode= 	$_POST['bpincode'];
            $bstate= 	$_POST['bstate'];
            $bcountry= 	$_POST['bcountry'];
            $semail= 	$_POST['semail'];

			$sadd=      $_POST['sadd'];
            $scity= 	$_POST['scity'];
            $spincode= 	$_POST['spincode'];
            $sstate= 	$_POST['sstate'];
            $scountry= 	$_POST['scountry'];
            $pemail= 	$_POST['pemail'];

            $gstimage= 	$_FILES['gstimage']['name'];
            $regimage= 	$_FILES['regimage']['name'];
            $panimage= 	$_FILES['panimage']['name'];
        
            $query = "select max(id) from garageinfo";
            $results = mysqli_query($conn, $query);
        
            foreach ($results as $r) {
            }
            $id = $r['max(id)'] + 1;
            $insertID =  $id;
            $folderPath = "base_url/Upload/garageMaster/".$insertID;
            $path = "base_url/Upload/garageMaster/".$insertID."/";
        
            $exist = is_dir($folderPath);
            if (!$exist) {
                mkdir($folderPath);
            }
            // $target_dir = "upload/product/";
            $target_file1 = $path . basename($_FILES["logoimg"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["logoimg"]["tmp_name"]);
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
                if (move_uploaded_file($_FILES["logoimg"]["tmp_name"], $target_file1)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["logoimg"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $target_file2 = $path . basename($_FILES["gstimage"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["gstimage"]["tmp_name"]);
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
                if (move_uploaded_file($_FILES["gstimage"]["tmp_name"], $target_file2)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["gstimage"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $target_file3 = $path . basename($_FILES["regimage"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["regimage"]["tmp_name"]);
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
                if (move_uploaded_file($_FILES["regimage"]["tmp_name"], $target_file3)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["regimage"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $target_file4 = $path . basename($_FILES["panimage"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file4, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["panimage"]["tmp_name"]);
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
                if (move_uploaded_file($_FILES["panimage"]["tmp_name"], $target_file4)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["panimage"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        
			

            $projectArray=array(
                                    'logoimg' 	 => "'".$logoimg."'",
									'gname' 	 => "'".$gname."'",
									'oname' 	 => "'".$oname."'",
									'contact' 	 => "'".$contact."'",
									'email' 	 => "'".$email."'",
									'website' 	 => "'".$website."'",

									'badd' 	     => "'".$badd."'",
                                    'bcity' 	 => "'".$bcity."'",
                                    'bpincode' 	 => "'".$bpincode."'",
                                    'bstate' 	 => "'".$bstate."'",
                                    'bcountry' 	 => "'".$bcountry."'",
                                    'semail' 	 => "'".$semail."'",

									'sadd' 	     => "'".$sadd."'",
                                    'scity' 	 => "'".$scity."'",
                                    'spincode' 	 => "'".$spincode."'",
                                    'sstate' 	 => "'".$sstate."'",
                                    'scountry' 	 => "'".$scountry."'",
                                    'pemail' 	 => "'".$pemail."'",
                                    
                                    'gstimage' 	 => "'".$gstimage."'",
                                    'regimage' 	 => "'".$regimage."'",
                                    'panimage' 	 => "'".$panimage."'",
									
									
									
					
				);
                

     $columns = implode(', ',array_keys($projectArray));
        $values = implode(', ',array_values($projectArray));
        // mysql_query("SET NAMES utf8");
        $sql="INSERT INTO `garageinfo` ($columns) VALUES ($values)";
        // $sql="INSERT INTO 'dealers'(dname,dphone,daddress) values (N'$dname',N'$dphone',N'$daddress')";
		if ($conn->query($sql) === TRUE)
		{
			// exit();
            echo '<script>';
            echo 'alert("data saved successfully");';
            echo 'window.location.href="http://localhost:8080/GarageMgtSystem/module/garageMaster/list.php"';
            echo '</script>';
		}
		else
		{
    	echo("".$conn->error);
    	echo 'alert("Error Occured! Record not Saved!");';
		
		}	
    
    }		
?>