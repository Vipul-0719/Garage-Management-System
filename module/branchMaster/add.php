<?php include '../connect.php'; ?>
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
                    <h4 class="m-b-0 text-white">Add Branch</h4>
                </div>
                <div class="card-body wizard-content">
                    <form action="addBackend.php" method="POST" enctype="multipart/form-data" class="validation-wizard wizard-circle m-t-40">
                        <!-- Step 1 -->
                        <h6>Branch Info</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="branchName">Branch Name : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control" id="branchName" name="branchName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Logo : </label>
                                        <input type="file" class="form-control" id="branchLogo" name="branchLogo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="establishmentDate">Establishment : <span class="danger">*</span></label>
                                        <input type="date" class="form-control" id="establishmentDate" name="establishmentDate">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gstNumber"> GST Number : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control" id="gstNumber" name="gstNumber">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cinNumber"> Cin Number : <span class="danger">*</span> </label>
                                        <input type="text" class="form-control" id="cinNumber" name="cinNumber">
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
                                        <label for="countryBranch"> Country : </span> </label>
                                        <select class="form-control" name="countryBranch" id="countryBranch">
                                            <option value="">--Select Country--</option>
                                            <?php
                                            $query = "SELECT * FROM country_master";
                                            $result = $conn->query($query);
                                            if ($result->num_rows > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['country_name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stateBranch"> State : </label>
                                        <select class="form-control" name="stateBranch" id="stateBranch">
                                            <option value="">--Select State--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cityBranch"> Town/City : </label>
                                        <select class="form-control" name="cityBranch" id="cityBranch">
                                            <option value="">--Select City--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pincodeBranch"> Pin Code : </label>
                                        <input type="text" class="form-control" id="pincodeBranch" name="pincodeBranch">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="addressBranch"> Street : </label>
                                        <input type="text" class="form-control" id="addressBranch" name="addressBranch">
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
                                        <input type="text" class="form-control" id="ownerName" name="ownerName">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactNumber"> Contact : </label>
                                        <input type="text" class="form-control" id="contactNumber" name="contactNumber">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender :</label>
                                        <select class="custom-select form-control" id="gender" data-placeholder="Type to search cities" name="gender">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Email : </label>
                                        <input type="text" class="form-control" id="email" name="email">
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
                                        <input type="text" class="form-control" id="bankName" name="bankName">
                                    </div>
                                    <div class="form-group">
                                        <label for="ifsc">IFSC Code : </label>
                                        <input type="text" class="form-control" id="ifscCode" name="ifscCode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bankBranch">Branch :</label>
                                        <input type="text" class="form-control" id="bankBranch" name="bankBranch">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountNumber">Account Number :</label>
                                        <input type="text" class="form-control" id="accountNumber" name="accountNumber">
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
<script>
    // $(document).ready(function() {
    //     $("select[name='countryBranch']").change(function() {
    //         var countryID = $(this).val();
    //         if (countryID) {
    //             $.ajax({
    //                 url: "action.php",
    //                 dataType: 'Json',
    //                 data: {
    //                     'id': countryID
    //                 },
    //                 success: function(data) {
    //                     $('select[name="stateBranch"]').html('<option>-- select state name --</option>');
    //                     $.each(data, function(key, value) {
    //                         // alert(key + ":" +value);
    //                         $('select[name="stateBranch"]').append('<option value="' + key + '">' + value + '</option>');
    //                     });
    //                 }
    //             });
    //         } else {
    //             $('select[name="stateBranch"]').empty();
    //         }
    //     });
    // });

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