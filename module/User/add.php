<?php include '../config.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 05:50:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>Garage Management System</title>
    <!-- This page CSS -->
    <link href="<?php echo base_url . 'assets/libs/jquery-steps/jquery.steps.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url . 'assets/libs/jquery-steps/steps.css'; ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url . 'dist/css/style.min.css'; ?>" rel="stylesheet">
    <!-- Datatable CSS  -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />
</head>

<body style="background-image: url(<?php echo base_url . 'assets/images/garage.jpg'; ?>); backgound-repeat:no-repeat;  background-size: cover; background-attachment: fixed;">

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
        <!-- Row -->

        <!-- End Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="card" style="background-color: grey; margin-top:235px; margin-left:17px; margin-right:17px;">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center; color: white; font-size:xx-large;"><b>User Login</b></h4>
                        <form class="form-horizontal" action="<?php echo base_url . 'module\garageMaster\loginBackend.php'; ?>" method="POST">

                            <div class="form-group row">
                                <!-- <label for="email2" style="color: white;" class="col-sm-3 control-label">Email*</label> -->
                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                        <div class="input-group-append"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                    </div>
                                </div>
                                <div class="col-sm-1">

                                </div>
                            </div>

                            <div class="form-group row">
                                <!-- <label for="pass3" style="color: white;" class="col-sm-3 control-label">Password*</label> -->
                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                        <div class="input-group-append"><span class="input-group-text"><i class="ti-lock"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="form-group row">
                                <!-- <label for="pass4" style="color: white;" class="col-sm-3 control-label">Role*</label> -->
                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="custom-select form-control required" id="role" data-placeholder="" name="role">
                                            <option value="">-- Select Role --</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Accountant">Accountant</option>
                                        </select>
                                        <div class="input-group-append"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">

                            </div>
                            <!-- <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="checkbox4" value="check">
                                                <label class="custom-control-label" for="checkbox4" style="color: white;">Check Me Out !</label>
                                            </div>
                                        </div>
                                    </div> -->
                            <div class="form-group row m-b-0">
                                <div class="offset-sm-1 col-sm-12">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Login</button>&nbsp;
                                    <button type="reset" class="btn btn-info waves-effect waves-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        <!-- End Row -->
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

    <script src="<?php echo base_url . 'assets/libs/jquery/dist/jquery.min.js'; ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url . 'assets/libs/popper.js/dist/umd/popper.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/libs/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
    <!-- apps -->
    <script src="<?php echo base_url . 'dist/js/app.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'dist/js/app.init.js'; ?>"></script>
    <script src="<?php echo base_url . 'dist/js/app-style-switcher.js'; ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url . 'assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/extra-libs/sparkline/sparkline.js'; ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url . 'dist/js/waves.js'; ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url . 'dist/js/sidebarmenu.js'; ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url . 'dist/js/custom.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/libs/jquery-steps/build/jquery.steps.min.js'; ?>"></script>
    <script src="<?php echo base_url . 'assets/libs/jquery-validation/dist/jquery.validate.min.js'; ?>"></script>

</body>