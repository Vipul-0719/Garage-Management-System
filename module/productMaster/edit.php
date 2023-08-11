<?php
$id = $_GET['id'];
include '../connect.php';
$sql = "SELECT * FROM `product` WHERE `id`='$id'";
$res = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($res)) {

?>

    <?php include '../header.php'; ?>

    
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Update Service</h4>
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

                        <!-- Start Form -->
                        <form class="form" action="editBackend.php" method="GET">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group row">
                                        <label for="ID" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="id" type="text" name="id" value="<?php echo $id; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="Product Name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="productnm" value="<?php echo $rows['productnm']; ?>" id="productnm" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="Upload Image" class="col-sm-3 text-right control-label col-form-label">Upload Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="productimg" value="<?php echo $rows['productimg']; ?>" id="productimg">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Serial Number" class="col-sm-3 text-right control-label col-form-label">Serial Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="serialno" value="<?php echo $rows['serialno']; ?>" id="serialno" placeholder="Enter Serial Number">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Model Name" class="col-sm-3 text-right ">Model Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="modelnm" value="<?php echo $rows['modelnm']; ?>" id="modelnm" placeholder="Enter Model Nmae">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Part Number" class="col-sm-3 text-right ">Part Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="partno" value="<?php echo $rows['partno']; ?>" id="partno" placeholder="Enter Mumber">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Sales Price" class="col-sm-3 text-right control-label col-form-label">Sales Price</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="saleprice" value="<?php echo $rows['saleprice']; ?>" id="saleprice" placeholder="Rs.">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
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

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="HSN Number" class="col-sm-3 text-right control-label col-form-label">HSN Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="hsnno" value="<?php echo $rows['hsnno']; ?>" id="hsnno" placeholder="00-00-00">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Product Manufacturing Date" class="col-sm-3 text-right ">Product Manufacturing Date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" name="mnfdate" value="<?php echo $rows['mnfdate']; ?>" id="mnfdate" placeholder="Enter date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Product Warrenty(In Years)" class="col-sm-3 text-right control-label col-form-label">Product Warrenty <br>(In Months)</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="warrenty" value="<?php echo $rows['warrenty']; ?>" id="warrenty" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div style="text-align: center;">
                                <input type="submit" id="submit" name="submit" value="Update" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">

                                <input type="reset" id="reset" name="reset" value="Cancel" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">
                            </div>
                        </form>
                    </div> <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include '../footer.php'; ?>
    <!-- End Footer -->
<?php
} ?>



