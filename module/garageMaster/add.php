<?php include '../header.php';?>
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Garage Master</h4>
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
                <div class="row">
                    <!-- ============================================================== -->
                     <!-- Example -->
                    <!-- ============================================================== -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body wizard-content">
                                 <button class="btn btn-primary my-3"><a href="list.php" class="text-light">Manage Garage</a></button>
                                <h4 class="card-title">Garage Info</h4>
                                <!--<h6 class="card-subtitle">You can us the validation like what we did</h6>-->
                                <form action="addBackend.php" method="POST" enctype="multipart/form-data" type="submit" name="garageinfo" id="garageinfo"class="validation-wizard wizard-circle m-t-40">
                                    <!-- Step 1 -->
                                    <h6>Personal Info</h6>
                                     <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="logo">Logo : <span class="danger">*</span> </label>
                                                    <input type="file" class="form-control " id="logoimg" name="logoimg"> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name"> Garage Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="gname" name="gname"> </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group"> 
                                                    <label for="Name2">Owner Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="oname" name="oname"> </div>
                                            </div>
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wphoneNumber2">Contact Number :</label>
                                                    <input type="number" class="form-control " id="contact" name="contact"> </div>
                                            </div>
                                             
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="email" name="email"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="website">Website :</label>
                                                    <input type="text" class="form-control " id="website" name="website"> </div>
                                            </div>
                                           
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Address</h6>
                                    <section>
                                    <h4 class="card-title m-t-20">Billing Address</h4>
                                        <div class="row">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address :</label>
                                                    <input type="text" id="badd" name="badd" class="form-control ">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City :</label>
                                                    <input type="text" id="bcity" name="bcity" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Pin Code :</label>
                                                    <input type="number" id="bpincode" name="bpincode" class="form-control ">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State :</label>
                                                    <input type="text" id="bstate" name="bstate" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country :</label>
                                                    <input type="text" id="bcountry" name="bcountry" class="form-control ">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailAddress1">Sales Email :</label>
                                                    <input type="email"  id="semail" name="semail" class="form-control  "> </div>
                                            </div>
                                            
                                        </div>
                                        <h4 class="card-title m-t-20">Shipping Address</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address :</label>
                                                    <input type="text" id="sadd" name="sadd" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City :</label>
                                                    <input type="text" id="scity" name="scity" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Pin Code :</label>
                                                    <input type="number" id="spincode" name="spincode" class="form-control ">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State :</label>
                                                    <input type="text" id="sstate" name="sstate" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country :</label>
                                                    <input type="text" id="scountry" name="scountry" class="form-control ">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailAddress1">Purchase Email :</label>
                                                    <input type="text"  id="pemail" name="pemail" class="form-control "> </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Documents</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>GST No : </label>
                                                    <input type="file" required="" id="gstimage" name="gstimage" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Registration No : </label>
                                                    <input type="file"  required="" id="regimage" name="regimage" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>PAN No :</label>
                                                    <input type="file"  required="" id="panimage" name="panimage" class="form-control ">
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="form-actions">

                                            <button type="submit" id="submit" name="submit" style="display:none;">Submit</button>
                                        </div>
                                    </section>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                </div>
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
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php include '../footer.php';?>          