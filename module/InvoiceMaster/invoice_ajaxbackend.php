<?php include '../connect.php';
                  //$sq="SELECT * from product";
                 // $id=$_GET['id'];
                  $productnm =explode(",",$_POST['productnm']);
                  $results= "SELECT * from product WHERE id='$productnm[0]'";
                  //echo 'abc';
                  $data=mysqli_query($conn, $results);
                  $rows = mysqli_fetch_assoc($data);
                  // $hsnno =     $rows['hsnno'];
                  // $logoimg =     $rows['logoimg'];
                  print_r(json_encode($rows));
                  ?>