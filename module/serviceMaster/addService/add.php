<?php
include '../../header.php';
?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Service Master</h4>
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
                    

                    <form class="form" action="addBackend.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Service Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="service" value="" id="service" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="Upload Image" class="col-sm-3 text-right control-label col-form-label">Upload Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="image" id="image">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Service Cost" class="col-sm-3 text-right control-label col-form-label">Service Cost</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="cost" value="Rs." id="cost" placeholder="Enter Service Cost">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6  p-t-15">
                                <div class="form-group row">
                                    <label for="GST" class="col-sm-3 text-right control-label col-form-label">GST</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select col-" id="gst" name="gst" type="" placeholder="Enter GST">
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
                                    <label for="Service Charge" class="col-sm-3 text-right ">Total Service Charge</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="charges" value="Rs." id="charges" placeholder="Enter Total Charge">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="SAC Code" class="col-sm-3 text-right control-label col-form-label">SAC Code</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="" name="saccode" value="" id="saccode" placeholder="99 00 00">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Service Charge" class="col-sm-3 text-right ">Alert Level By Km/s</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="alert" value="" id="alert" placeholder="Enter....">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Next Service Date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" name="date" value="dd-MM-yyyy" id="date" placeholder="dd-MM-yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div style="text-align: center;">
                    <input type="submit" id="submit" name="submit" value="Submit" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">

                    <input type="reset" id="reset" name="reset" value="Cancel" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">
                </div>                
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- Footer -->
    <?php include '../../footer.php'; ?>
    <!-- End Footer -->


