<!-- Edit Form  -->
<?php include '../connect.php' ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `vendor_master` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($result)) {
?>

    <?php include '../header.php'; ?>
    
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
   <div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Vender Master</h4>
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
                    <h4 class="m-b-0 text-white">Add vendor</h4>
                </div>
                <div class="card-body wizard-content">
                    <form action="editBackend.php" method="GET" enctype="multipart/form-data" type="submit" name="vendorMaster" id="vendorMaster" class="validation-wizard wizard-circle m-t-40">

                        <!-- Step 1 -->
                        <h6>Vendor Info</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id">id : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="id" name="id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="venderName">Vendor Name : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="vendorName" name="vendorName">
                                    </div>
                                </div>
                                
                                
								</div>
								
								<div class="row">
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Cno">Contact no : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="Cno" name="Cno">
                                    </div>
                                </div>
                                <div class="col-md-6">
								
                                    <div class="form-group">
                                        <label for="RegNumber">Register Number : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control   " id="RegNumber" name="RegNumber">
                                    </div>
                                </div>
                               
                       
                               
								 </div>
								 <div class="row">
								 
								  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="VenEmail">Vendor Email : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control   " id="VenEmail" name="VenEmail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                        <label for="gstNumber"> GST Number : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="gstNumber" name="gstNumber">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Vendor Address</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="countryBranch"> Country : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control   " id="country" name="country">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stateBranch"> State : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control " id="state" name="state">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cityBranch"> Town/City : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control " id="city" name="city">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pincodeBranch"> Pin Code : </label>
                                        <input type="text" class="form-control  " id="pincode" name="pincode">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="addressBranch"> Street : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="street" name="street">
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <!-- Step 3 -->
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
                                        <input type="text" class="form-control  " id="ifscCode" name="ifscCode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankBranch">Branch :</label>
                                        <input type="text" class="form-control  " id="bankBranch" name="bankBranch">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountNumber">Account Number :</label>
                                        <input type="text" class="form-control  " id="accountNumber" name="accountNumber">
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
                        <h4 class="m-b-0 text-white">Update Branch</h4>
                    </div>
                    <div class="card-body wizard-content">
                        <form action="editBackend.php" method="GET" enctype="multipart/form-data" type="submit" name="branchMaster" id="branchMaster" class="validation-wizard wizard-circle m-t-40">
                            <!-- Step 1 -->
                            <h6>Branch Info</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ID">id</label>
                                            <input type="text" class="form-control" id="id" name="id" value=<?php echo $rows['id']; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="branchName">Branch Name : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="branchName" name="branchName" value=<?php echo $rows['branchName']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>branchLogo : </label>
                                            <input type="file" class="form-control" id="branchLogo" name="branchLogo" value=<?php echo $rows['branchLogo']; ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="establishmentDate">Establishment Date : <span class="danger">*</span></label>
                                            <input type="date" class="form-control  " id="establishmentDate" name="establishmentDate" value=<?php echo $rows['establishmentDate']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gstNumber"> GST Number : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="gstNumber" name="gstNumber" value=<?php echo $rows['gstNumber']; ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cinNumber"> Cin Number : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="cinNumber" name="cinNumber" value=<?php echo $rows['cinNumber']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
            
                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h6>Branch Address</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="countryBranch"> Country : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="countryBranch" name="countryBranch" value=<?php echo $rows['countryBranch']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="stateBranch"> State : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="stateBranch" name="stateBranch" value=<?php echo $rows['stateBranch']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cityBranch"> Town/City : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="cityBranch" name="cityBranch" value=<?php echo $rows['cityBranch']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pincodeBranch"> Pin Code : </label>
                                            <input type="text" class="form-control" id="pincodeBranch" name="pincodeBranch" value=<?php echo $rows['pincodeBranch']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="addressBranch"> Street : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control  " id="addressBranch" name="addressBranch" value=<?php echo $rows['addressBranch']; ?>>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 3 -->
                            <h6>Branch Manager</h6>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ownerName">Owner Name :</label>
                                            <input type="text" class="form-control  " id="ownerName" name="ownerName" value=<?php echo $rows['ownerName']; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="contactNumber"> Contact : </label>
                                            <input type="number" class="form-control  " id="contactNumber" name="contactNumber" value=<?php echo $rows['contactNumber']; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="designation"> Designation : </label>
                                            <input type="text" class="form-control  " id="designation" name="designation" value=<?php echo $rows['designation']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Gender :</label>
                                            <select class="custom-select form-control  " id="gender" data-placeholder="Type to search cities" name="gender" value=<?php echo $rows['gender']; ?>>
                                            <option value="">-- Select Gender --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="email"> Email : </label>
                                            <input type="text" class="form-control  " id="email" name="email" value=<?php echo $rows['email']; ?>>
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
                                            <input type="text" class="form-control  " id="bankName" name="bankName" value=<?php echo $rows['bankName']; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="ifsc">IFSC Code : </label>
                                            <input type="text" class="form-control" id="ifscCode" name="ifscCode" value=<?php echo $rows['ifscCode']; ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bankBranch">Branch :</label>
                                            <input type="text" class="form-control  " id="bankBranch" name="bankBranch" value=<?php echo $rows['bankBranch']; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="accountNumber">Account Number :</label>
                                            <input type="text" class="form-control  " id="accountNumber" name="accountNumber" value=<?php echo $rows['accountNumber']; ?>>
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

    <?php include '../footer.php'; ?>
<?php
}
?>