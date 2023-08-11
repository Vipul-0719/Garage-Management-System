<?php
include '../../header.php';
include '../../connect.php';
?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Service Master</h4>
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

                <button class="btn btn-info my-5"><a href="list.php" class="text-light">Manage Service Reminder</a></button>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white" style="font-weight: bold;">Reminder</h4>
            </div>

            <div class="card">

                <div class="card-body bg-light">
                    <h4 class="card-title m-t-10 p-b-20"></h4>


                    <form class="form" action="addBackend.php" method="POST">

                        <div class="row">
                            <div class="col-sm-12 col-lg-6  p-t-15">
                                <div class="form-group row">
                                    <label for="Customer Name" class="col-sm-3 text-right control-label col-form-label">Customer Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control custom-select" id="customernm"  name="customernm">
                                            <option value="">Select Customer Name</option>
                                            <?php
                                            // include '../connect.php';
                                            $query = "SELECT * FROM `customers`";
                                            $results = mysqli_query($conn, $query);
                                            //loop
                                            foreach ($results as $r) {
                                            ?>
                                                <option value="<?php echo $r["id"] . ',' . $r["FName"]; ?>"><?php echo $r["FName"]; ','.  $r["LName"]; ?> <?php echo $r["LName"]; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6  p-t-15">
                                <div class="form-group row">
                                    <label for="Vehicle Name" class="col-sm-3 text-right control-label col-form-label">Vehicle Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control custom-select" id="vehiclenm"  name="vehiclenm">
                                            <option value="">Select Vehicle Name</option>
                                            <?php
                                            // include '../connect.php';
                                            $query = "SELECT * FROM `vehicleinfo`";
                                            $results = mysqli_query($conn, $query);
                                            //loop
                                            foreach ($results as $r) {
                                            ?>
                                                <option value="<?php echo $r["id"] . ',' . $r["vname"]; ?>"><?php echo $r["vname"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6  p-t-15">
                                <div class="form-group row">
                                    <label for="Upcoming Service Name" class="col-sm-3 text-right control-label col-form-label">Upcoming Service Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control custom-select" id="service"  name="service">
                                            <option value="">Select Upcoming Service</option>
                                            <?php
                                            // include '../connect.php';
                                            $query = "SELECT * FROM `service`";
                                            $results = mysqli_query($conn, $query);
                                            //loop
                                            foreach ($results as $r) {
                                            ?>
                                                <option value="<?php echo $r["id"] . ',' . $r["service"]; ?>"><?php echo $r["service"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row p-t-15">
                                    <label for="Service Cost" class="col-sm-3 text-right control-label col-form-label">Next Occurrance</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" name="date" value="" id="date">
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div style="text-align: center;">
                    <input type="submit" id="submit" name="submit" value="Submit" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">

                    <input type="reset" id="reset" name="reset" value="Cancel" class="text-light btn btn-primary my-5" style=" font-weight:bolder; text-align:center">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../../footer.php';
?>

<!-- 
    
 -->