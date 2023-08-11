<?php include '../../header.php';
?>

<?php
$id=$_GET['id'];
include '../../connect.php';

$sql="SELECT * FROM `pucinfo` where `id`='$id'";
$res = mysqli_query($conn,$sql);
while($rows =mysqli_fetch_assoc($res)){
?>

<div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header bg-info">
                                <h4 class="card-title text-white">PUC Form</h4>
                            </div>
                            <form class="form-horizontal" action="editbackend.php"  method="GET">
                                <div class="form-body">
                                    <div class="card-body">
                                        
                                        <h4 class="card-title">Add PUC Details</h4>
                                    </div>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">id</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="id" name="id" placeholder=""  value="<?php echo $id;?>">
                                                         </div>
</div>

                                                  <div class="form-group row">
                                                    
                                                    <label class="control-label text-right col-md-3">Licence Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="lnumber" name="lnumber" placeholder="" value="<?php echo $rows['lnumber'];?>">
                                                         </div>
                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                         <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Name</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control" data-placeholder="Enter Student Name" tabindex="1" id="vname"  name="vname" value="<?php echo $rows['vname'];?>">
                                                        <option value="">Select Vehicle Name</option>
                                                        <?php
                                                                include '../../connect.php';
                                                                $query = "SELECT * FROM vehicleinfo";
                                                                $results=mysqli_query($conn, $query);
                                                                //loop
                                                                foreach ($results as $r){
                                                            ?>
                                                                    <option value="<?php echo $r["id"].','.$r["vname"];?>"><?php echo $r["vname"];?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                     </select>
                                                         </div>
                                                </div>
                                            </div>
                                                
                                                
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">PUC Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="pucnumber" name="pucnumber" placeholder="" value="<?php echo $rows['pucnumber'];?>">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Center Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="cname" name="cname" placeholder="" value="<?php echo $rows['cname'];?>">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Center Address</Address></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="caddress" name="caddress" placeholder="" value="<?php echo $rows['caddress'];?>">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Result</label>
                                                    <div class="col-md-9">
                                                        
                                                        <select class="form-control custom-select"  id="res" name="res" data-placeholder="Choose a Category" tabindex="1" value="<?php echo $rows['res'];?>">
                                                            <option value="Pass" >Pass</option>
                                                            <option value="Fail" >Fail</option>
                                                            
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Fail Reason</Address></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="freason" name="freason" placeholder="" value="<?php echo $rows['freason'];?>">
                                                         </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Test Date</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control"  id="tdate" name="tdate" value="<?php echo $rows['tdate'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Valid Till</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control"  id="valid" name="valid" value="<?php echo $rows['valid'];?>">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                            <!--/span-->
                                           
</div>    
                                                    </div>                

                                    <hr>
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                                <button type="button" class="btn btn-dark">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>

                <!-- End Row -->
                <!-- Row -->
              
<?php include '../../footer.php';
?>


      

<?php
}?>

    
   
