<?php
$id = $_GET['id'];
include '../../connect.php';
$sql = "SELECT * FROM `service` WHERE `id`='$id'";
$res = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($res)) {

?>

    <?php include '../../header.php'; ?>


    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Update Service</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">

                    <button class="btn btn-primary my-5"><a href="list.php" class="text-light">Manage Service</a></button>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white" style="font-weight: bold;">Add Services</h4>
                </div>
                <div class="card">
                    <div class="card-body bg-light">
                        <h4 class="card-title m-t-10 p-b-20"></h4>

                        <!-- Start Form -->
                        <form class="form" action="editBackend.php" method="GET">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="ID" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="id" type="text" name="id" value="<?php echo $id; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-3 text-right control-label col-form-label">Service Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="service" name="service" value="<?php echo $rows['service']; ?>" id="service">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="Upload Image" class="col-sm-3 text-right control-label col-form-label">Upload Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="image" value="<?php echo $rows['service']; ?>" id="image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row p-t-15">
                                        <label for="Service Charge" class="col-sm-3 text-right control-label col-form-label">Service Cost</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" name="cost" value="<?php echo $rows['cost']; ?>" id="cost">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6  p-t-15">
                                    <div class="form-group row">
                                        <label for="GST" class="col-sm-3 text-right control-label col-form-label">GST</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select col-" id="gst" name="gst" type="gst">
                                                <option selected="">Choose .....</option>
                                                <option value="0%">0%</option>
                                                <option value="5%">5%</option>
                                                <option value="12%">12%</option>
                                                <option value="18%">18%</option>
                                                <option value="28%S">28%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row p-t-15">
                                        <label for="Service Charge" class="col-sm-3 text-right control-label col-form-label">Total Service Charge</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" name="charges" value="<?php echo $rows['charges']; ?>" id="charges">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row p-t-15">
                                        <label for="SAC Code" class="col-sm-3 text-right control-label col-form-label">SAC Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" name="saccode" value="<?php echo $rows['saccode']; ?>" id="saccode">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row p-t-15">
                                        <label for="Service Charge" class="col-sm-3 text-right ">Alert Level By Km/s</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" name="alert" value="<?php echo $rows['alert']; ?>" id="alert" placeholder="Enter....">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row p-t-15">
                                        <label for="Next Service Date" class="col-sm-3 text-right control-label col-form-label">Next Service Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" name="date" value="<?php echo $rows['date']; ?>" id="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center;">
                                <input type="submit" id="submit" name="submit" value="Update" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">

                                <input type="reset" id="reset" name="reset" value="Cancel" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">
                            </div>
                        </form>
                    </div> <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include '../../footer.php'; ?>
    <!-- End Footer -->
<?php
} ?>




<!-- <div class="form-group">
                                                        <label for="name" class=" form-control-label">ID</label>
                                                        <input type="text" id="id" name="id"  class="form-control" autocomplete="off" value="<?php echo $id; ?>">
                                                        
                                                </div>

                                                <div class="form-group row">
                                        <label for="category" class="col-2 col-form-label" style="font-weight: bolder; font-size:larger">Select Service For </label>
                                        
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="category" name="category" type="category" >
                                                <option selected="">Choose Service.....</option>
                                                <option value="2 Wheeler">2 Wheeler</option>
                                                <option value="3 Wheeler">3 Wheeler</option>
                                                <option value="4 Wheeler">4 Wheeler</option>
                                                <option value="Driveline">Auto Rikshwa</option>
                                                <option value="4 Wheeler Tractor">4 Wheeler Tractor</option>
                                                <option value="Electric">Electric</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label" style="font-weight: bolder; font-size:larger">Add Service</label>
                                        <div class="col-10">
                                            <input class="form-control" type="service" name="service" value="<?php echo $rows['service']; ?>" id="service">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label" style="font-weight: bolder; font-size:larger">Service Date</label>
                                        

                                        <div class="col-10">
                                            <input class="form-control" type="date" name="date" value="<?php echo $rows['date']; ?>" id="date">
                                            
                                        </div>
                                    </div>

                                     

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label" style="font-weight: bolder; font-size:larger">Service Charges</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" name="charges" value="<?php echo $rows['charges']; ?>" id="charges">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label" style="font-weight: bolder; font-size:larger">Service Type</label>
                                                <div class="form-check">
                                                    <div class="custom-control custom-radio" style="font-weight: bolder; font-size:larger">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked">
                                                        <label class="custom-control-label" for="customControlValidation2">Free</label>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <div class="custom-control custom-radio" style="font-weight: bolder; font-size:larger">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked">
                                                        <label class="custom-control-label" for="customControlValidation3">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    <div style="text-align: center;">
                                        <input type="submit" id="submit" name="submit" value="Update" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">
                                        <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>

                                        
                                    </div> -->