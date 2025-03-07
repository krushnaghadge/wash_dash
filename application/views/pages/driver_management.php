<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>
<style>
#notData {
    display: none;
    text-align: center;
}

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
                                <!-- <h4 class="page-title">Driver Managemnt</h4> -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Driver Managemnt</li>
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
                                    <h3 class="card-title">Driver Managemnt</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                  <table id="datatable" class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Driver Name</th>
                                                            <th>Mobile No</th>
                                                            <th>Email ID</th>
                                                            <th>vehical Type</th>
                                                            <th>Invitation Code</th>
                                                            <th>Vehicle No.</th>
                                                            <th>Account Approved status</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                //   echo"<pre>"; print_r($drivers); echo"</pre>";
            if (!empty($drivers)) {
                $sr_no = 1;
                foreach ($drivers as $driver) { ?>

                                                        <tr>
                                                            <td><?= $sr_no++?></td>
                                                            <td><?= $driver['driver_name']; ?></td>
                                                            <td><?= $driver['driver_mobile_number']; ?></td>
                                                            <td><?= $driver['driver_email']; ?></td>
                                                            <td><?= $driver['driver_vehicle_type']; ?></td>
                                                            <td><?= $driver['driver_invitation_code']; ?></td>
                                                            <td><?= $driver['driver_vehicle_no']; ?></td>
                                                            <td><span class="text-success">Approved</span></td>
                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle"
                                                                    data-on="Active" data-off="Deactive"
                                                                    data-onstyle="success" data-offstyle="danger"
                                                                    data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url('driver_details') ?>"
                                                                    class="btn btn-info btn-sm">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm sa-warning"><i
                                                                        class="fa fa-trash"></i></a>
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