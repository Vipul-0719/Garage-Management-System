

<?php include '../../header.php';?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header bg-info">
                                <h4 class="card-title text-white">PUC Form</h4>
                            </div>
                            <form class="form-horizontal" action="addbackend.php"  method="POST">
                                <div class="form-body">
                                    <div class="card-body">
                                        
                                        <h4 class="card-title">Add PUC Details</h4>
                                        <hr>
                                        <button class="btn btn-primary my-5"><a href="list.php" class="text-light">PUC list</a></button>
                                    </div>
                                   
                                    <div class="card-body">
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
                                                    <label class="control-label text-right col-md-3">Licence Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="lnumber" name="lnumber" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">PUC Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="pucnumber" name="pucnumber" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Center Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="cname" name="cname" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Center Address</Address></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  id="caddress" name="caddress" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Result</label>
                                                    <div class="col-md-9">
                                                        
                                                        <select class="form-control custom-select"  id="res" name="res" data-placeholder="Choose a Category" tabindex="1">
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
                                                        <input type="text" class="form-control"  id="freason" name="freason" placeholder="">
                                                         </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Test Date</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control"  id="tdate" name="tdate">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Valid Till</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control"  id="valid" name="valid">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                            <!--/span-->
                                           
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
                                
                            </form>
                        </div>
</div>

                <!-- End Row -->
                <!-- Row -->
                
            
        
    
<?php include '../../footer.php';
?>


</html>