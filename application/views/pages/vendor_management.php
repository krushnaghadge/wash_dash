<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>
<style>
    .toggle-handle {
        background-color: aliceblue;
    }
</style>

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
                                <!-- <h4 class="page-title">Vendor Managemnt</h4> -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Vendor Managemnt</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Vendor Managemnt</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="">
                                                <table id="datatable" class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Company Name</th>
                                                            <th>Contact Person</th>
                                                            <th>Mobile No</th>
                                                            <th>Email ID</th>
                                                            <th>Grade</th>
                                                            <th>Ratings</th>
                                                            <th>Account Approve Status</th>
                                                            <th>Wallet Amt</th>
                                                            <th>Commission</th>
                                                            <th>Total Amt</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                  // echo"<pre>"; print_r($vendors); echo"</pre>";
            if (!empty($vendors)) {
                $sr_no = 1;
                foreach ($vendors as $vendor) { ?>
                                                        <tr>
                                                            <td><?php echo $sr_no++; ?></td>
                                                            <td><?php echo $vendor['vendor_shop_name']; ?></td>
                                                            <td><?php echo $vendor['vendor_name']; ?></td>
                                                            <td><?php echo $vendor['vendor_contact_number']; ?></td>
                                                            <td><?php echo $vendor['vendor_email']; ?></td>
                                                            <td><span class="badge badge-warning text-danger">Cheapest</span>
                                                            </td>
                                                            <td>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <br>

                                                                <span> <b>( 1.5)</b></span>
                                                            </td>
                                                            <td><span class="text-success">Approved</span></td>
                                                            <td>SAR 300</td>
                                                            <td>10%</td>
                                                            <td>SAR 500</td>
                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

                                                            </td>
                                                            <td>

                                                                <a data-toggle="modal" data-target="#edit-modal" class="btn btn-warning btn-sm">
                                                                    <i class="fa fa-edit" style="color: #fff;"></i>
                                                                </a>
                                                                <a href="<?php echo base_url('vendor_details') ?>" class="btn btn-info btn-sm">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <a href="#" class="ml-1 btn btn-danger btn-sm sa-warning">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                        <?php } 
            } else { ?>
                <tr>
                    <td colspan="10" class="text-center">No users found.</td>
                </tr>
            <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="edit-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Grade & Commission</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Select Grade</label>
                                                    <select class="form-control">
                                                        <option>Select Grade</option>

                                                        <option>Cheapest</option>
                                                        <option>Economical</option>
                                                        <option>Expensive</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Commission </label>
                                                    <div class="input-group">

                                                        <input type="text" name="" class="form-control" placeholder="">
                                                        <span class="input-group-prepend">
                                                            <button type="button" class="btn waves-effect waves-light btn-success">
                                                                <i class="fa fa-percent"></i> </button>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-info waves-effect waves-light">
                                            Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end container-fluid -->

            </div>
            <!-- end content -->

            <!-- Footer Start -->
            <?php include 'commonfiles/footer.php' ?>
            <!-- end Footer -->

        </div>

        <!-- End Page content -->

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  
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