<?php require '../header.php'; ?>
<?php require '../connect.php'; ?>

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
                    <form action="addBackend.php" method="POST" enctype="multipart/form-data" type="submit" name="branchMaster" id="branchMaster" class="validation-wizard wizard-circle m-t-40">
                        <!-- Step 1 -->
                        <h6>Vendor Info</h6>
                        <section>
                            <div class="row">
                           
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="venderName">Vendor Name : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="vendorName" name="vendorName">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Cno">Contact no : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control  " id="Cno" name="Cno">
                                    </div>
                                </div>
								</div>
								
								<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="RegNumber">Register Number : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control   " id="RegNumber" name="RegNumber">
                                    </div>
                                </div>
                               
                       
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="VenEmail">Vendor Email : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control   " id="VenEmail" name="VenEmail">
                                    </div>
                                </div>
								 </div>
								 <div class="row">
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
<?php require '../footer.php.'; ?>