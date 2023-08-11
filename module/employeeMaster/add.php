<?php include '../header.php';
 include '../connect.php';?>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Employee Master</h4>
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
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- ============================================================== -->
        <!-- Example -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Example -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Example -->
        <!-- ============================================================== -->
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white" >Add Employee</h4>
                    <!-- <button class="btn btn-primary my-5 "><a href="list.php" class="text-light">Manage Employee</a></button> -->
                </div>
                <div class="card-body wizard-content">
                    <form action="addBackend.php" method="POST" enctype="multipart/form-data" type="submit" name="employeeMaster" id="employeeMaster" class="validation-wizard wizard-circle m-t-40">
                        <!-- Step 1 -->
                        <h6>Employee Info</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="branchName">Employee Name : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control" id="ename" name="ename">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Photo: </label>
                                        <input type="file" class="form-control " id="photo" name="photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="establishmentDate">Email Address : <span class="danger">*</span></label>
                                        <input type="text" class="form-control  " id="emailaddress" name="emailaddress">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gstNumber"> Phone Number : <span class="danger">*</span> </label>
                                        <input type="number" class="form-control  " id="phno" name="phno">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender :</label>
                                        <select class="custom-select form-control  " id="gender" data-placeholder="" name="gender">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Date of Birth : <span class="danger">*</span> </label>
                                        <input type="date" class="form-control  " id="dob" name="dob">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Age : <span class="danger">*</span> </label>
                                        <input type="number" class="form-control  " id="age" name="age">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Address : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="address" name="address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> City : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="city" name="city">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> State : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="state" name="state">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Pincode : <span class="danger">*</span> </label>
                                        <input type="number" class="form-control  " id="pincode" name="pincode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Country : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="country" name="country">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Employee Branch </h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="jobTitle2">Branch Name :</label>
                                            <div class="col-md-9">
                                                <select class="form-control" data-placeholder="Enter Branch Name" tabindex="1" id="bname" name="bname">
                                                    <option value="">Select Branch Name</option>
                                                    <?php
                                            // include '../connect.php';
                                            $query = "SELECT * FROM `branch_master`";
                                            $results = mysqli_query($conn, $query);
                                            //loop
                                            foreach ($results as $r) {
                                            ?>
                                                <option value="<?php echo $r["id"] . ',' . $r["branchName"]; ?>"><?php echo $r["branchName"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="webUrl3">Branch Address :</label>
                                            <div class="col-md-9">
                                                <select class="form-control" data-placeholder="Enter Address" tabindex="1" id="baddress" name="baddress">
                                                <option value="">Select Address</option>
                                                <?php
                                            // include '../connect.php';
                                            $query = "SELECT * FROM `branch_master`";
                                            $results = mysqli_query($conn, $query);
                                            //loop
                                            foreach ($results as $r) {
                                            ?>
                                                <option value="<?php echo $r["id"] . ',' . $r["addressBranch"]; ?>"><?php echo $r["addressBranch"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                                </select>
                                            </div>    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cityBranch"> Contact : <span class="danger">*</span> </label>
                                        <input type="number" class="form-control  " id="contact" name="contact">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pincodeBranch"> Email : </label>
                                        <input type="text" class="form-control  " id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="addressBranch"> Website : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="website" name="website">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 3 -->
                        <h6>Employment</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ownerName">Joining Date :</label>
                                        <input type="date" class="form-control  " id="joindate" name="joindate">
                                    </div>
                                    <div class="form-group">
                                        <label for="designation"> Start Time : </label>
                                        <input type="time" class="form-control  " id="starttime" name="starttime">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Resignation Date : </label>
                                        <input type="date" class="form-control  " id="rdate" name="rdate">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label for="contactNumber"> Designation : </label>
                                        <input type="text" class="form-control  " id="designation" name="designation">
                                    </div>
                                    <div class="form-group">
                                        <label for="cinNumber"> End Time :  </label>
                                        <input type="time" class="form-control  " id="endtime" name="endtime">
                                    </div>
                                   
                                </div>
                            </div>
                        </section>
                        <!-- Step 4 -->
                        <h6>Bank Details</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankName">Bank Name :</label>
                                        <input type="text" class="form-control  " id="bankName" name="bankName">
                                    </div>
                                    <div class="form-group">
                                        <label for="ifsc">IFSC Code : </label>
                                        <input type="number" class="form-control  " id="ifscCode" name="ifscCode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankBranch">Branch :</label>
                                        <input type="text" class="form-control  " id="bankBranch" name="bankBranch">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountNumber">Account Number :</label>
                                        <input type="number" class="form-control  " id="acno" name="acno">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankName">Aadhar Number :</label>
                                        <input type="number" class="form-control  " id="aadharno" name="aadharno">
                                    </div>
                                    <div class="form-group">
                                        <label for="ifsc">PAN Number : </label>
                                        <input type="number" class="form-control  " id="pan" name="pan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankBranch"> Upload Aadhar :</label>
                                        <input type="file" class="form-control  " id="uaadhar" name="uaadhar">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountNumber">Upload PAN :</label>
                                        <input type="file" class="form-control  " id="upan" name="upan">
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" id="submit" name="submit" style="display:none;"></button>
                        </section>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include '../footer.php';?>