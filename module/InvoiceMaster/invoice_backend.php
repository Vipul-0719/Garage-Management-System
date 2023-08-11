<?php include '../connect.php'; ?>


<?php
//error_reporting(0);
if (isset($_POST['submit'])) {
    //if(empty($_POST['FName']) && empty($_POST['MName']) && empty($_POST['LName']) && empty($_POST['Gender']) &&empty($_POST['DOB']) && empty($_POST['Age']) && empty($_POST['Phoneno']) && empty($_POST['Mobileno']) && empty($_POST['Email']) && empty($_POST['Address']) && empty($_POST['Street']) && empty($_POST['City'])	&& empty($_POST['State']) && empty($_POST['Pincode']) && empty($_POST['Country']))
    //if(isset($_POST["submit"]) && empty($_POST['FName']) && empty($_POST['MName']) && empty($_POST['LName']) && empty($_POST['Mobileno']) && empty($_POST['Email']))
    //{
    /*echo 'if';
		    echo '<script>';
            echo 'alert("Sorry, you have not required values");';
            echo 'window.location.href="http://localhost/GarageMgtSystem/module/Invoice/invoice_header.php"';
            echo '</script>';
    }
         else
		{
			echo 'else';*/

    $branchID =     $_POST['branchID'];
    $date = $_POST['date'];
    $invoiceno = $_POST['invoiceno'];
    $billno =     $_POST['billno'];
    $top =     $_POST['top'];
    $deliveryNote =     $_POST['deliveryNote'];
    $deliverydate = $_POST['deliverydate'];
    $custID = $_POST['custID'];
    $refno =     $_POST['refno'];
    $otherRef =     $_POST['otherRef'];
    $orderno =     $_POST['orderno'];
    $orderdate =     $_POST['orderdate'];
    $dispatchdocNo =     $_POST['dispatchdocNo'];
    $destination =     $_POST['destination'];
    $dispatch =     $_POST['dispatch'];
    $termsOfDelivery =     $_POST['termsOfDelivery'];



    //	$query = "select * from invoice_header ";
    //$results = mysqli_query($conn, $query);


    //  $header=array(						
    // 						'branchID' 	 => "'".$branchID."'",
    // 						'date' 	 => "'".$date."'",
    // 						'invoiceno' 	 => "'".$invoiceno."'",
    //                         'billno' 	 => "'".$billno."'",
    // 						'top' 	 => "'".$top."'",
    //                         'deliveryNote' 	 => "'".$deliveryNote."'",
    // 						'deliverydate' 	 => "'".$deliverydate."'",
    // 					    'custID'=>"'".$custID."'",
    // 						'refno' 	 => "'".$refno."'",
    //                         'otherRef' 	 => "'".$otherRef."'",
    //                         'orderno' 	 => "'".$orderno."'",
    //                         'orderdate' 	 => "'".$orderdate."'",
    //                         'dispatchdocNo' 	 => "'".$dispatchdocNo."'",
    // 						'destination' 	 => "'".$destination."'",
    //                         'dispatch' 	 => "'".$dispatch."'",
    // 						'termsOfDelivery' 	 => "'".$termsOfDelivery."'",			
    // 	);

    // print_r($header);
    // $columns = implode(',',array_keys($header));
    // $values = implode(',',array_values($header));
    // mysql_query("SET NAMES utf8");
    $sql = "INSERT INTO `invoice_header` (branchID, date, invoiceno, billno, top, deliveryNote, custID, refno, otherRef, orderno, orderdate, dispatchdocNo, destination, dispatch, termsOfDelivery) VALUES ('$branchID', '$date', '$invoiceno', '$billno', '$top', '$deliveryNote', '$custID', '$refno', '$otherRef', '$orderno', '$orderdate', '$dispatchdocNo', '$destination', '$dispatch', '$termsOfDelivery')";
    // print_r($sql);exit;
    // $sql="INSERT INTO 'dealers'(dname,dphone,daddress) values (N'$dname',N'$dphone',N'$daddress')";
    if ($conn->query($sql)) {
        // echo $last_id = $conn->insert_id;
        // exit();
        $productnm = $_POST['productnm'];
        $hsnno = $_POST['hsnno'];
        $gst = $_POST['gst'];
        $qty = $_POST['qty'];
        $unit = $_POST['unit'];
        $sprice = $_POST['sprice'];
        $disc = $_POST['disc'];
        $description = $_POST['description'];
        $amount = $_POST['amount'];
        // $productnm=explode(",",$_POST['productnm']);
        //print_r($productnm);exit;
        for ($i = 0; $i < count($productnm); $i++) {
            // $line = array(
            //     'productnm'      => "'" . $productnm[$i] . "'",
            //     'hsnno'      => "'" . $hsnno[$i] . "'",
            //     'gst'      => "'" . $gst[$i] . "'",
            //     'qty'      => "'" . $qty[$i] . "'",
            //     'unit'      => "'" . $unit[$i] . "'",
            //     'sprice'      => "'" . $sprice[$i] . "'",
            //     'disc'      => "'" . $disc[$i] . "'",
            //     'description'      => "'" . $description[$i] . "'",
            //     'amount'      => "'" . $amount[$i] . "'",
            // );
            // $columns = implode(', ', array_keys($line));
            // $values = implode(', ', array_values($line));
            // mysql_query("SET NAMES utf8");
            $sql = "INSERT INTO `invoice_line` (productnm, hsnno, gst, qty, unit, sprice, disc, description, amount) VALUES ('$productnm[$i]', '$hsnno[$i]', '$gst[$i]', '$qty[$i]', '$unit[$i]', '$sprice[$i]', '$disc[$i]', '$description[$i]', '$amount[$i]')";
            // $sql="INSERT INTO 'dealers'(dname,dphone,daddress) values (N'$dname',N'$dphone',N'$daddress')";
            if ($conn->query($sql)) {
                // exit();

                echo '<script>';
                echo 'alert("data saved successfully");';
                //echo 'window.location.href="http://localhost/GarageMgtSystem/module/Invoice/list.php"';
                echo '</script>';
            } else {
                //    echo "else".$conn->error;
                echo 'alert("Error Occured! Record not Saved!");';
            }
        }
    }
}
?> 
