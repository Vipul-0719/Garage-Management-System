<!-- Edit Form  -->
<?php include '../connect.php' ?>
<?php
$branch_id = $_GET['id'];
$sql = "SELECT * FROM `branch_master` WHERE `id`='$branch_id'";
// $result = mysqli_query($conn, $sql);
$result = $conn->query($sql)->fetch_assoc();
// while ( $result = mysqli_fetch_assoc($result)) {
?>
<?php include '../header.php'; ?>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Branch Master</h4>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Edit Branch</h4>
                </div>
                <div class="card-body wizard-content">
                    <form action="editBackend.php" method="POST" enctype="multipart/form-data" class="validation-wizard wizard-circle m-t-40">
                        <!-- Step 1 -->
                        <h6>Branch Info</h6>
                        <section>
                            <div class="row">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" value=<?php echo $result['id']; ?>>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="branchName">Branch Name :</label>
                                        <input type="text" class="form-control" id="branchName" name="branchName" value=<?php echo $result['branchName']; ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Branch Logo Image : </label>
                                    <img src="<?php echo base_url . 'Upload/branchMaster/'; ?><?php echo $result['branchLogo'] ?>" style="width:140px; height:100px; margin-left:20px;">
                                    <input type="hidden" name="old_image" value="<?php echo $result['branchLogo'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="establishmentDate">Establishment Date : </label>
                                        <input type="date" class="form-control " id="establishmentDate" name="establishmentDate" value=<?php echo  $result['establishmentDate']; ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Photo: </label>
                                        <input type="file" class="form-control" id="branchLogo" name="branchLogo" value="<?php echo  $result['branchLogo']; ?>">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Cin Number : </label>
                                        <input type="text" class="form-control  " id="cinNumber" name="cinNumber" value=<?php echo  $result['cinNumber']; ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gstNumber"> GST Number : </label>
                                        <input type="text" class="form-control  " id="gstNumber" name="gstNumber" value=<?php echo  $result['gstNumber']; ?>>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Branch Address</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="countryBranch"> Country : </label>
                                        <select class="form-control" name="countryBranch" id="countryBranch">
                                            <?php
                                            $query1 = "SELECT id,country_name FROM country_master";
                                            $result1 = $conn->query($query1);
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                            ?>
                                                <option value="<?= $row1['id'] ?>"><?php echo $row1['country_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stateBranch"> State : </label>
                                        <select class="form-control" name="stateBranch" id="stateBranch">
                                            <?php
                                            $query2 = "SELECT state_name FROM state_master ";
                                            $result2 = $conn->query($query2);
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                <option value="<?php $row2['state_name'] ?>"><?php echo $row2['state_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cityBranch"> Town/City : </label>
                                        <select class="form-control" name="cityBranch" id="cityBranch">
                                            <?php
                                            $query3 = "SELECT city_name FROM city_master";
                                            $result3 = $conn->query($query3);
                                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                            ?>
                                                <option value="<?php $row3['city_name'] ?>"><?php echo $row3['city_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pincodeBranch"> Pin Code : </label>
                                        <input type="text" class="form-control" id="pincodeBranch" name="pincodeBranch" value=<?php echo  $result['pincodeBranch']; ?>>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="addressBranch"> Street : </label>
                                        <input type="text" class="form-control  " id="addressBranch" name="addressBranch" value=<?php echo  $result['addressBranch']; ?>>
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
                                        <input type="text" class="form-control  " id="ownerName" name="ownerName" value=<?php echo  $result['ownerName']; ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="contactNumber"> Contact : </label>
                                        <input type="number" class="form-control  " id="contactNumber" name="contactNumber" value=<?php echo  $result['contactNumber']; ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender :</label>
                                        <select class="custom-select form-control  " id="gender" data-placeholder="Type to search cities" name="gender" value=<?php echo  $result['gender']; ?>>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Email : </label>
                                        <input type="text" class="form-control  " id="email" name="email" value=<?php echo  $result['email']; ?>>
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
                                        <input type="text" class="form-control  " id="bankName" name="bankName" value=<?php echo  $result['bankName']; ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="ifsc">IFSC Code : </label>
                                        <input type="text" class="form-control" id="ifscCode" name="ifscCode" value=<?php echo  $result['ifscCode']; ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankBranch">Branch :</label>
                                        <input type="text" class="form-control  " id="bankBranch" name="bankBranch" value=<?php echo  $result['bankBranch']; ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="accountNumber">Account Number :</label>
                                        <input type="text" class="form-control" id="accountNumber" name="accountNumber" value=<?php echo  $result['accountNumber']; ?>>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="update" name="update" style="display:none;"></button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).ready(function() {
            $("#countryBranch").on('change', function() {
                var countryid = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "action.php",
                    data: {
                        id: countryid
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#stateBranch").html(data);
                        $("#cityBranch").html('<option value="">--Select City--</option');
                    }
                });
            });
            $("#stateBranch").on('change', function() {
                var stateid = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "action.php",
                    data: {
                        sid: stateid
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#cityBranch").html(data);
                    }
                });
            });
        });
    });
</script>
<?php include '../footer.php'; ?>
<?php
// }
?>