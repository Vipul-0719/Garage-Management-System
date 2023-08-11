<?php include '../connect.php'; ?>

<?php
$id = $_GET['id'];
$selectquery = "SELECT * FROM `garageinfo` WHERE `id`='$id' ";
$result = mysqli_query($conn, $selectquery);
while ($row = mysqli_fetch_assoc($result)) {

?>
    <?php include '../header.php'; ?>
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
                        <h4 class="card-title">Garage Info</h4>
                        <!--<h6 class="card-subtitle">You can us the validation like what we did</h6>-->
                        <form action="editBackend.php" method="GET" enctype="multipart/form-data" type="submit" name="garageinfo" id="garageinfo" class="validation-wizard wizard-circle m-t-40">
                            <!-- Step 1 -->
                            <h6>Personal Info</h6>
                            <section>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo">Logo : <span class="danger">*</span> </label>
                                            <input type="file" class="form-control required" id="logoimg" name="logoimg" value="<?php echo $row['logoimg']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"> Garage Name : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="gname" name="gname" value="<?php echo $row['gname']; ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Name2">Owner Name : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="oname" name="oname" value="<?php echo $row['oname']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wphoneNumber2">Contact Number :</label>
                                            <input type="tel" class="form-control required" id="contact" name="contact" value="<?php echo $row['contact']; ?>">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="email" name="email" value="<?php echo $row['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website">Website :</label>
                                            <input type="text" class="form-control required" id="website" name="website" value="<?php echo $row['website']; ?>">
                                        </div>
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
                                                <textarea name="address" id="badd" name="badd" value="<?php echo $row['badd']; ?>" class="form-control required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City :</label>
                                                <input type="text" id="bcity" name="bcity" value="<?php echo $row['bcity']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pin Code :</label>
                                                <input type="text" id="bpincode" name="bpincode" value="<?php echo $row['bpincode']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State :</label>
                                                <input type="text" id="bstate" name="bstate" value="<?php echo $row['bstate']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country :</label>
                                                <input type="text" id="bcountry" name="bcountry" value="<?php echo $row['bcountry']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress1">Sales Email :</label>
                                                <input type="email" id="semail" name="semail" value="<?php echo $row['semail']; ?>" class="form-control required ">
                                            </div>
                                        </div>

                                    </div>
                                    <h4 class="card-title m-t-20">Shipping Address</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address :</label>
                                                <textarea name="address" id="sadd" name="sadd" value="<?php echo $row['sadd']; ?>" class="form-control required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City :</label>
                                                <input type="text" id="scity" name="scity" value="<?php echo $row['scity']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pin Code :</label>
                                                <input type="text" id="spincode" name="spincode" value="<?php echo $row['spincode']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State :</label>
                                                <input type="text" id="sstate" name="sstate" value="<?php echo $row['sstate']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country :</label>
                                                <input type="text" id="scountry" name="scountry" value="<?php echo $row['scountry']; ?>" class="form-control required">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress1">Purchase Email :</label>
                                                <input type="text" id="pemail" name="pemail" value="<?php echo $row['pemail']; ?>" class="form-control required">
                                            </div>
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
                                            <input type="file" required="" id="gstimage" name="gstimage" value="<?php echo $row['gstimage']; ?>" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration No : </label>
                                            <input type="file" required="" id="regimage" name="regimage" value="<?php echo $row['regimage']; ?>" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>PAN No :</label>
                                            <input type="file" required="" id="panimage" name="panimage" value="<?php echo $row['panimage']; ?>" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="submit" style="display:none;">Submit</button>

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
<?php
}
?>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php include '../footer.php'; ?>