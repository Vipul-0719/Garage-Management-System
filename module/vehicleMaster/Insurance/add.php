
<?php include '../../header.php';
?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header bg-info">
                                <h4 class="card-title text-white">Insurance Form</h4>
                            </div>
                            <form class="form-horizontal" action="addbackend.php" enctype="multipart/form-data" method="POST">
                                <div class="form-body">
                                    <div class="card-body">
                                        
                                      
                                        <h4 class="card-title">Insurance Details</h4>
                                        <hr>
                                        <button class="btn btn-primary my-5"><a href="list.php" class="text-light">Insurance List</a></button>
                                    </div>
                                    
                                    <div class="card-body">
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                         <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Name</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control" data-placeholder="Enter Student Name" tabindex="1" id="vname"  name="vname">
                                                        <option value="">Select Vehicle Name</option>
                                                        <?php
                                                                include '../../connect.php';
                                                                $query = "SELECT * FROM vehicleinfo";
                                                                $results=mysqli_query($conn, $query);
                                                                //loop
                                                                foreach ($results as $r){
                                                            ?>
                                                                    <option value="<?php echo $r["id"].','.$r["vname"];?>"><?php echo $r["id"];?>,<?php echo $r["vname"];?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                     </select>
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Customer Name</label>
                                                    <div class="col-md-9">
                                                    <select class="form-control" data-placeholder="Enter customer Name" tabindex="1" id="FName"  name="FName">
                                                        <option value="">Select customer Name</option>
                                                        <?php
                                                                include '../../connect.php';
                                                                $query = "SELECT * FROM customers";
                                                                $results=mysqli_query($conn, $query);
                                                                //loop
                                                                foreach ($results as $r){
                                                            ?>
                                                                    <option value="<?php echo $r["id"].','.$r["FName"];?>"><?php echo $r["id"];?>,<?php echo $r["FName"];?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                     </select>
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Company Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="cname" name="cname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Policy Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="pnumber" name="pnumber">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Charge Payable</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="cpayable" name="cpayable">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="vnumber" name="vnumber">
                                                    </div>
                                                </div>
                                            </div>

                                            <!--/span-->
                                            
                                        <!--/row-->
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Start Date</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control"  id="sdate" name="sdate" >
                                                    </div>
                                                </div>
                                            </div>


                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">End Date</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control"  id="edate" name="edate">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--/span-->
                                        
                                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="Upload Image" class="col-sm-3 text-right control-label col-form-label">Policy Document</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="pdocument" id="pdocument">
                                    </div>
                                </div>
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


</html>