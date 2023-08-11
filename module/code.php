<?php
$k=$_POST['id'];
$k=trim($k);
include './connect.php';
$sql = "SELECT * FROM product where productnm='{$k}' ";
  $res=mysqli_query($conn,$sql);
while($rows = mysqli_fetch_array($res)){

?>
 <option value="<?php echo $rows["productnm"];?>"><?php echo $rows["productnm"];?></option>  
 <tr>
     <td><?php echo $rows['itemName'];?></td>
     <td><?php echo $rows['quntt'];?></td>
     <td><?php echo $rows['unit'];?></td>
     <td><?php echo $rows['sprice'];?></td>
     <td><?php echo $rows['disc'];?></td>
     <td><?php echo $rows['amount'];?></td>

</tr> 
<?php
}
echo $sql;
?>

<?php
if(isset($_POST['submit']))
 {
       
       
        $itemName = $_POST['itemName'];
        $quntt = $_POST['quntt'];
       $unit = $_POST['unit'];
        $sprice = $_POST['sprice'];
        $diss = $_POST['diss'];
        $amount = $_POST['amount'];
       
        //echo count($product1);
        //print_r($product1);exit;
        //count( $invoiceno, $itemName,  $quntt, $unit, $sprice, $diss, $amount);
        $InfoArray = array(
                
                
                'itemName'       => "'" . $itemName . "'",
                'quntt'         => "'" . $quntt . "'",
                'unit'         => "'" . $unit . "'",
                'sprice'         => "'" . $sprice . "'",
                'diss'         => "'" . $diss . "'",
                'amount'         => "'" . $amount . "'"
        );

        $col = implode(',', array_keys($InfoArray));
        $val = implode(',', array_values($InfoArray));

        $sql = "INSERT INTO `invoice_line` ($col) VALUES($val)";

      // print_r($InfoArray);exit;

            

        if ($conn->query($sql) === TRUE)
         {
                
                count($InfoArray);
                for($i = 0; $i<$count; $i++)  
                     {  
                     $sql("INSERT INTO invoice_line  
                     $itemName = '{$_POST['itemName'][$i]}',  
                     $quntt = '{$_POST['quntt'][$i]}', 
                     $unit = '{$_POST['unit'][$i]}',   
                     $sprice = '{$_POST['sprice'][$i]}',  
                    $diss = '{$_POST['diss'][$i]}',  
                     $amount = '{$_POST['amount'][$i]}'");   
                   
                echo '<script>';
                echo 'alert("Data saved successfully");';
                echo 'window.location.href="http://localhost/GarageMgtSystem/module/transactionMaster/list.php"';
                echo '</script>';
          }
        }
               
         else {
                echo ("" . $conn->error);
                echo 'alert("Error Occured! Record not Saved!");';
                // echo 'window.location.href = "./productList.php"';      
        }
}
