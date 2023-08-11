<?php include '../header.php'; ?>
<?php include '../connect.php'; ?>
<?php
error_reporting(0);
$id = $_GET['id'];
$sql = "SELECT * FROM `emp_master` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($result)) {
?>
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
                        <h4 class="m-b-0 text-white">Update Employee INFO</h4>
                    </div>
                    <div class="card-body wizard-content">
                        <form action="editBackend.php" method="GET" enctype="multipart/form-data" type="submit" name="employeeMaster" id="employeeMaster" class="validation-wizard wizard-circle m-t-40">
                            <!-- Step 1 -->
                            <h6>Branch Info</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ID">id</label>
                                            <input type="number" class="form-control" id="id" name="id" value=<?php echo $rows['id']; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="branchName">Employee Name : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="ename" name="ename" value="<?php echo $rows['ename']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>photo : </label>
                                            <input type="file" class="form-control" id="photo" name="photo" value="<?php echo $rows['photo']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="establishmentDate">Email Address : <span class="danger">*</span></label>
                                            <input type="text" class="form-control  " id="emailaddress" name="emailaddress" value="<?php echo $rows['emailaddress']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gstNumber"> Phone Number : <span class="danger">*</span> </label>
                                            <input type="number" class="form-control  " id="phno" name="phno" value="<?php echo $rows['phno']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="gender">Gender :</label>
                                            <select class="custom-select form-control  " id="gender" data-placeholder="" name="gender" value="<?php echo $rows['gender']; ?>">
                                            <option value="">-- Select Gender --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="cinNumber"> Date Of Birth : <span class="danger">*</span> </label>
                                            <input type="date" class="form-control  " id="dob" name="dob" value="<?php echo $rows['dob']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cinNumber"> Age : <span class="danger"></span> </label>
                                            <input type="number" class="form-control " id="age" name="age" value="<?php echo $rows['age']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="cinNumber"> Address : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="address" name="address" value="<?php echo $rows['address']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cinNumber"> City : <span class="danger"></span> </label>
                                            <input type="text" class="form-control " id="city" name="city" value="<?php echo $rows['city']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="cinNumber"> State : <span class="danger"></span> </label>
                                            <input type="text" class="form-control " id="state" name="state" value="<?php echo $rows['state']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cinNumber"> Pincode : <span class="danger"></span> </label>
                                            <input type="number" class="form-control " id="pincode" name="pincode" value="<?php echo $rows['pincode']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="cinNumber"> Country : <span class="danger"></span> </label>
                                            <input type="text" class="form-control " id="country" name="country" value="<?php echo $rows['country']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h6>Employee Branch</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="countryBranch"> Branch Name : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="bname" name="bname" value="<?php echo $rows['bname']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="stateBranch"> Branch Address : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="baddress" name="baddress" value="<?php echo $rows['baddress']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cityBranch"> Contact : <span class="danger"></span> </label>
                                            <input type="number" class="form-control " id="contact" name="contact" value="<?php echo $rows['contact']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pincodeBranch"> Email : </label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $rows['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="addressBranch"> Website : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="website" name="website" value="<?php echo $rows['website']; ?>">
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
                                            <input type="date" class="form-control  " id="joindate" name="joindate" value="<?php echo $rows['joindate']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email"> Start Time : </label>
                                            <input type="time" class="form-control  " id="starttime" name="starttime" value="<?php echo $rows['starttime']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="designation"> Resignation Date : </label>
                                            <input type="date" class="form-control  " id="rdate" name="rdate" value="<?php echo $rows['rdate']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="contactNumber"> Designation : </label>
                                            <input type="text" class="form-control  " id="designation" name="designation" value="<?php echo $rows['designation']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email"> End Time : </label>
                                            <input type="time" class="form-control  " id="endtime" name="endtime" value="<?php echo $rows['endtime']; ?>">
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
                                            <input type="text" class="form-control  " id="bankName" name="bankName" value="<?php echo $rows['bankName']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="ifsc">IFSC Code : </label>
                                            <input type="number" class="form-control" id="ifscCode" name="ifscCode" value="<?php echo $rows['ifscCode']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bankBranch">Branch :</label>
                                            <input type="text" class="form-control  " id="bankBranch" name="bankBranch" value="<?php echo $rows['bankBranch']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="accountNumber">Account Number :</label>
                                            <input type="number" class="form-control  " id="acno" name="acno" value="<?php echo $rows['acno']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="establishmentDate">Aadhar Number : <span class="danger">*</span></label>
                                            <input type="number" class="form-control  " id="aadharno" name="aadharno" value="<?php echo $rows['aadharno']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gstNumber">Upload Aadhar Card : <span class="danger">*</span> </label>
                                            <input type="file" class="form-control  " id="uaadhar" name="uaadhar" value="<?php echo $rows['uaadhar']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="establishmentDate">PAN Number : <span class="danger">*</span></label>
                                            <input type="number" class="form-control  " id="pan" name="pan" value="<?php echo $rows['pan']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gstNumber"> Upload PAN Card : <span class="danger">*</span> </label>
                                            <input type="file" class="form-control  " id="upan" name="upan" value="<?php echo $rows['upan']; ?>">
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
    <?php
     }
    ?>
    <?php include '../footer.php'; ?>
