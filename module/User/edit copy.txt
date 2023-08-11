<?php include '../header.php'; ?>
<?php include '../connect.php'; ?>
<?php
error_reporting(0);
$id = $_GET['id'];
$sql = "SELECT * FROM `user_master` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_assoc($result)) {
?>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">User Master</h4>
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
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">User Login</h4>
                                <form class="form-horizontal p-t-20" action="editBackend.php" method="GET">
                                   
                                    <div class="form-group row">
                                        <label for="email2" class="col-sm-3 control-label">ID*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="id" name="id" placeholder="Enter id" value="<?php echo $rows['id']; ?>">
                                                <div class="input-group-append"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email2" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $rows['email']; ?>">
                                                <div class="input-group-append"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label for="pass3" class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="password" name="password" placeholder="Enter pwd" value="<?php echo $rows['password']; ?>">
                                                <div class="input-group-append"><span class="input-group-text"><i class="ti-lock"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass4" class="col-sm-3 control-label">Role*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                            <select class="custom-select form-control required" id="role" data-placeholder="" name="role" value="<?php echo $rows['role']; ?>">
                                            <option value="">-- Select Role --</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Employee">Employee</option>
                                                <option value="Accountant">Accountant</option>
                                            </select>
                                                <div class="input-group-append"><span class="input-group-text"><i class="ti-lock"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="checkbox4" value="check">
                                                <label class="custom-control-label" for="checkbox4">Check Me Out !</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>

    </div>
    <?php
     }
    ?>
    <?php include '../footer.php'; ?>
