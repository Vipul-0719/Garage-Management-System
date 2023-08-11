<?php include '../header.php';?>
                    <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Customer Master</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="m-r-10">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small>LAST MONTH</small>
                                <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                 <!-- Row -->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <!-- <div>
            <button class="btn btn-primary my-5"><a href="add.php" class="text-light">Manage Customer</a></button>
            </div> -->
            <form action="addBackend.php" method="post">
                <div class="card-body">
                    <h4 class="card-title">Customer Info</h4>
                </div>
                <hr>
                <div class="form-body">
                    <div class="card-body">
                        <div class="row p-t-20">

                            <!--/span-->
                            <div class="col-md-4">
                                <div class="form-group has-danger">
                                    <label class="control-label">First Name</label>
                                    <input type="text" id="FName" name="FName" class="form-control form-control-danger" >
                                    </div>
                            </div>
							<div class="col-md-4">
                                <div class="form-group has-danger">
                                    <label class="control-label">Middle Name</label>
                                    <input type="text" id="MName" name="MName" class="form-control form-control-danger" >
                                    </div>
                            </div>
							<div class="col-md-4">
                                <div class="form-group has-danger">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" id="LName" name="LName" class="form-control form-control-danger" >
                                    </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label">Gender</label>
                                    <select class="form-control custom-select"  id="Gender"  name="Gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <small class="form-control-feedback"> Select your gender </small> </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Date of Birth</label>
                                    <input type="date" class="form-control"  id="DOB"  name="DOB">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
						
						<!--row-->
						<div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Age</label>
                                    <input type="number" id="Age" name="Age" class="form-control" >
                                    </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label"> Phone no. </label>
                                    <input type="number" id="Phoneno" name="Phoneno" class="form-control form-control-danger" >
                                    </div>
                            </div>
                            <!--/span-->
                        </div>
						<!--/row-->
                        <div class="row">
                         <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label"> Mobile no. </label>
                                    <input type="number" id="Mobileno" name="Mobileno" class="form-control form-control-danger" >
                                    </div>
                            </div> 
                       <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label"> Email </label>
                                    <input type="text" id="Email" name="Email" class="form-control form-control-danger" >
                                    </div>
                            </div>							
                        </div>
                        <!--/row-->
                        <h4 class="card-title m-t-40">Address</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" id="Address" name="Address" class="form-control">
                                </div>
                            </div>
                        </div>
						 <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Street</label>
                                    <input type="text" id="Street" name="Street" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" id="City" name="City" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" id="State" name="State" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="number" id="Pincode" name="Pincode" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control custom-select" id="Country" name="Country">
                                        <option>--Select your Country--</option>
                                        <option>India</option>
                                        <option>Sri Lanka</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-dark">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
          <?php include '../footer.php';?>