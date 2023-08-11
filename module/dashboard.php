<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card gredient-info-bg m-t-0 m-b-0">
                <div class="card-body">
                    <h4 class="card-title text-white">Welcome Jon Doe</h4>
                    <h5 class="card-subtitle text-white op-5">Dashboard</h5>
                    <div class="row m-t-30 m-b-20">
                        <!-- col -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="temp d-flex align-items-center flex-row">
                                <div class="display-5 text-white"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                                <div class="m-l-10">
                                    <h3 class="m-b-0 text-white">Saturday</h3><small class="text-white op-5">Kolhapur, India</small>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-sm-12 col-lg-8">
                            <div class="row">
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="m-r-10">
                                            <i class="mdi mdi-wallet text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white m-b-0">$6,890.68</h3>
                                            <span class="text-white op-5">Net Profit</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="m-r-10">
                                            <i class="mdi mdi-star-circle text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white m-b-0">$769.08</h3>
                                            <span class="text-white op-5">Refferal Earnings</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="m-r-10">
                                            <i class="mdi mdi-basket text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white m-b-0">5489</h3>
                                            <span class="text-white op-5">Estimated Sales</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Earnings -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
                <!-- Devices - Income - Sales -->
                <!-- ============================================================== -->
                <div class="row m-t-30">
                    <!-- col -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Vehicle</h4>
                                <div id="visitor" style="height:267px; width:100%;" class="m-t-20"></div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Low Stock</h4>
                                <div class="net-income m-t-30 position-relative" style="height:257px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">total Order</h4>
                                <div class="row">
                                    <div class="col-6 m-t-40">
                                        <h2 class="m-b-5">$4316</h2>
                                        <span>(150-165 sales)</span>
                                    </div>
                                    <div class="col-6">
                                        <div id="sales" class="ml-auto" style="height:115px; width:115px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Revenue</h4>
                                <div class="row">
                                    <div class="col-6 m-t-40">
                                        <h2 class="m-b-5">$3528</h2>
                                        <span>(150-165 sales)</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="gaugejs-box text-right">
                                            <canvas id="foo" class="gaugejs ml-auto" height="60" width="120">guage</canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
</body>
</html>
<?php include 'footer.php'; ?>
