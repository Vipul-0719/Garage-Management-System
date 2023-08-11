

<?php include '../../header.php';
?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header bg-info">
                                <h4 class="card-title text-white">Vehicle Form</h4>
                            </div>
                            <form class="form-horizontal" action="addbackend.php"  method="POST">
                                <div class="form-body">
                                    <div class="card-body">
                                        
                                        <h4 class="card-title">Add Vehicle</h4>
                                        <hr>
                                        <button class="btn btn-primary my-5"><a href="list.php" class="text-light">Manage Vehicle</a></button>
                                    </div>
                                    
                                   
                                  <div class="card-body">

                                    <div class="row">
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
                                                    <label class="control-label text-right col-md-3">Vehicle Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="vname" name="vname" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="vnumber" name="vnumber" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Contact Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="cnumber" name="cnumber" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Registration Date</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control"  id="rdate" name="rdate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger row">
                                                    <label class="control-label text-right col-md-3">Vehicle Color</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger"  id="vcolor" name="vcolor" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Type</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control custom-select"  id="vtype" name="vtype">
                                                            <option value="2 wheeler" >2 wheeler</option>
                                                            <option value="4 wheeler" >4 wheeler</option>
                                                        </select>
                                                        <small class="form-control-feedback"> Select Vehicle Type. </small> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger row">
                                                    <label class="control-label text-right col-md-3">Engine Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger"  id="enumber" name="enumber" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            
                                            
                                            <!--/span-->
                                        </div>
                                        
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Fuel Type</label>
                                                    <div class="col-md-9">
                                                        
                                                        <select class="form-control custom-select"  id="ftype" name="ftype" data-placeholder="Choose a Category" tabindex="1">
                                                            <option value="CNG" >CNG</option>
                                                            <option value="Petrol" >Petrol</option>
                                                            <option value="Diesel">Diesel</option>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger row">
                                                    <label class="control-label text-right col-md-3">Number Of Gear</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger"  id="ngear" name="ngear" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Model Name</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control"  id="mname" name="mname">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger row">
                                                    <label class="control-label text-right col-md-3">Model Year</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger"  id="myear" name="myear" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group has-danger row">
                                                    <label class="control-label text-right col-md-3">Odometer Reading</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger"  id="oreading" name="oreading" placeholder="">
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