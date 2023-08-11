<?php
include '../header.php';
?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Unit</h4>
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

                <button class="btn btn-primary my-5"><a href="list.php" class="text-light">Manage Unit</a></button>

            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white" style="font-weight: bold;">Add Unit</h4>
            </div>


            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title m-t-10 p-b-20"></h4>
                    <form class="form" action="addBackend.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Unit Name</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="char" name="uomname" value="" id="uomname" placeholder="Name....">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="Description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <label for="text-2"></label>
                                        <br />
                                        <textarea type="text" id="description" name="description" rows="5" class="form-control" placeholder="Description...."></textarea>
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
</div>


<?php
include '../footer.php';
?>