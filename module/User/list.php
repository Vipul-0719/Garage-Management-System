<!DOCTYPE html>
<html lang="en">

<?php include '../header.php';?>
 <?php include '../connect.php';?>    
    <body> 
    <div class="row">
     <div class="col-12">
        <div class="card">
         <div class="card-body">
            <h4 class="card-title">User List</h4>
            <hr>
            <button class="btn btn-primary my-5"><a href="add.php" class="text-light">Add User</a></button>
                <div class="table-responsive">
                  <table id="dataTableUser" class="table table-striped table-bordered display nowrap" style="width:100%">
                           <!-- <thead> -->
                           <!-- <tr> -->
                      <thead>
                        <tr>
                                 
                            <th><b>ID</b></th>
                                    <th><b>Action</b></th>
                                    <th><b>Email</b></th>
                                    <th><b>Password</b></th>
                                    <th><b>Role</b></th>
                                    
                              
                        </tr>
                      </thead>
            <?php 
            $sql = 'SELECT * FROM `user_login`';
            $result= mysqli_query($conn,$sql);
            if($result){
                while($rows = mysqli_fetch_array($result) ){
                    $id = $rows['id'];
                    $email= 	$rows['email'];
                    $photo= $rows['password'];
                    $emailaddress= 	$rows['role'];
                    
			
			
                
                
                    
                    echo'<tr>
                    <th scope="row">' . $id . '</th>
            <td>
            <button class="btn btn-primary">
            <a href="edit.php?id=' . $id . '" class="text-light">Edit</a>
        </button>
        <button class="btn btn-danger">
            <a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a>

        </button>
          </td>	
          		
            <td>' . $email . '</td>
            <td>' . $password . '</td>
            <td>' . $role . '</td>
            
                
             </tr>';
                }
             ?>
            <?php
                }
             ?>
        <!-- </tbody> -->
            </table>
            </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- footer -->
    <!-- ============================================================== -->
   <?php include '../footer.php'; ?>
      
