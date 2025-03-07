<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include 'commonfiles/header.php' ?>
        <!-- end Topbar -->

        <!--  Left Sidebar Start -->
        <?php include 'commonfiles/sidebar.php' ?>
        <!-- Left Sidebar End -->

        <!-- Start Page Content here -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <!-- <h4 class="page-title">User Managemnt</h4> -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Manage Points</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Manage Point System</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-inline">
                                        <div class="input-group">

                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail2"
                                                    value="100">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>SAR</span>
                                                </button>
                                            </span>
                                        </div>




                                        <div class="form-group ml-2">
                                            <label for="checkbox3">
                                                Equal to
                                            </label>
                                        </div>
                                        <div class="input-group">

                                            <div class="form-group ml-2">
                                                <input type="email" class="form-control" id="exampleInputEmail2"
                                                    value="10">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>Points</span>
                                                </button>
                                            </span>
                                        </div>
                                        <div class=" mt-4 input-group">

                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail2"
                                                    value="1000">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>Points</span>
                                                </button>
                                            </span>
                                        </div>




                                        <div class="mt-4 form-group ml-2">
                                            <label for="checkbox3">
                                                Equal to
                                            </label>
                                        </div>
                                        <div class=" mt-4 input-group">

                                            <div class="form-group ml-2">
                                                <input type="email" class="form-control" id="exampleInputEmail2"
                                                    value="100">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>SAR</span>
                                                </button>
                                            </span>
                                        </div>

                                        <div class="col-md-12 text-center mt-3">
                                            <button type="button" class="btn btn-primary waves-effect waves-light ">
                                                Add
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->


                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <h5>Add Points</h5>

                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add-modal">Add Points</button>




                                    </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                 <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>SAR/Points</th>
                                                            <th>Points/SAR</th>

                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>100 SAR</td>
                                                            <td>10 Ponits</td>

                                                            <td>
                                                                <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-modal">
                                                                    <i class="fa fa-edit text-light"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm sa-warning">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>1</td>
                                                            <td>1000 Points</td>
                                                            <td>10 SAR</td>

                                                            <td>
                                                                <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-modal">
                                                                    <i class="fa fa-edit text-light"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm sa-warning">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="add-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Points</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <form class="form-inline">
                                        <div class="input-group">

                                            <div class="form-group">
                                                <input type="number" class="form-control" value="100">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>SAR</span>
                                                </button>
                                            </span>
                                        </div>




                                        <div class="form-group ml-2">
                                            <label for="checkbox3">
                                                Equal to
                                            </label>
                                        </div>
                                        <div class="input-group">

                                            <div class="form-group ml-2">
                                                <input type="number" class="form-control" value="10">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>Points</span>
                                                </button>
                                            </span>
                                        </div>
                                        <div class=" mt-4 input-group">

                                            <div class="form-group">
                                                <input type="number" class="form-control" value="1000">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>Points</span>
                                                </button>
                                            </span>
                                        </div>


                                        <div class="mt-4 form-group ml-2">
                                            <label for="checkbox3">
                                                Equal to
                                            </label>
                                        </div>
                                        <div class=" mt-4 input-group">

                                            <div class="form-group ml-2">
                                                <input type="number" class="form-control" value="100">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>SAR</span>
                                                </button>
                                            </span>
                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary waves-effect"
                                        data-dismiss="modal">Close</button> -->
                                    <button type="submit" class="btn btn-info waves-effect waves-light">
                                        Add</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div id="edit-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Point</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <form class="form-inline">
                                        <div class="input-group">

                                            <div class="form-group">
                                                <input type="number" class="form-control" value="100">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>SAR</span>
                                                </button>
                                            </span>
                                        </div>




                                        <div class="form-group ml-2">
                                            <label for="checkbox3">
                                                Equal to
                                            </label>
                                        </div>
                                        <div class="input-group">

                                            <div class="form-group ml-2">
                                                <input type="number" class="form-control" value="10">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>Points</span>
                                                </button>
                                            </span>
                                        </div>
                                        <div class=" mt-4 input-group">

                                            <div class="form-group">
                                                <input type="number" class="form-control" value="1000">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>Points</span>
                                                </button>
                                            </span>
                                        </div>


                                        <div class="mt-4 form-group ml-2">
                                            <label for="checkbox3">
                                                Equal to
                                            </label>
                                        </div>
                                        <div class=" mt-4 input-group">

                                            <div class="form-group ml-2">
                                                <input type="number" class="form-control" value="100">
                                            </div>
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-success">
                                                    <span>SAR</span>
                                                </button>
                                            </span>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">
                                        Save Changes</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->

            <!-- Footer Start -->
            <?php include 'commonfiles/footer.php' ?>
            <!-- end Footer -->

        </div>
    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>
      
       <!-- DELETE MODAL -->
 <script>
     (function(t) {
         "use strict";
         var e = function() {};
         e.prototype.init = function() {
             t(".sa-warning").click(function() {
                 Swal.fire({
                     title: "<table id='datatable' class='table table-striped table-bordered dt-responsive nowrap' style='border-collapse: collapse; border-spacing: 0; width: 100%;'>",
                     text: "You won't be able to revert this!",
                     icon: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#348cd4",
                     cancelButtonColor: "#6c757d",
                     confirmButtonText: "Yes, delete it!"
                 }).then(function(result) {
                     if (result.isConfirmed) {
                         Swal.fire("Deleted!", "Your file has been deleted.", "success");
                     }
                 });
             });
         };

     })
 </script>

</body>

</html>