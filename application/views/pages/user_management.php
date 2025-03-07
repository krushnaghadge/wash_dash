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

        <!-- Topbar Star t -->
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
                                        <li class="breadcrumb-item active">User Managemnt</li>
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
                                    <h3 class="card-title">User Managemnt</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- <div class="table-responsive"> -->
                                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Profile</th>
                                                            <th>User Name</th>
                                                            <th>Mobile No</th>
                                                            <th>Email ID</th>
                                                            <th>Register Date</th>
                                                            <th>Wallet Amt</th>
                                                            <th>Avl.Points</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                 



                                                    <?php 
                                                

            if (!empty($users)) {
                $sr_no = 1;
                foreach ($users as $user) 
               
                {  
                    $user_name=$user['user_name'];
                ?>
                 
                 <!-- [user_id] => 26
            [user_role] => vendor
            [user_mobile_number] => 9000000034
            [user_password_hash] => hash_vendor5
            [user_name] => Indian Maharashtrian Vendor 5
            [user_email] => vendor5@example.com
            [user_created_at] => 2025-02-17 12:06:56 -->
                                                        <tr>
                                                        <td><?php echo $sr_no++; ?></td>
                                                            <td>
                                                            <div class="inbox-item-img">
                    <img src="<?= !empty($user['profile_image']) ? $user['profile_image'] : 'assets/images/users/avatar-1.jpg'; ?>" 
                         class="rounded-circle" alt="" style="height: 35px;">
                </div> <!-- <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt="" style="height: 35px;"></div> -->
                                                            </td>
                                                          
                                                            <td><?php echo $user['user_name']; ?></td>
                                                            
                                                            <td><?= $user['user_mobile_number']; ?></td>
                                                             <td><?= $user['user_email']; ?></td>
                                                            <td>SAR 30</td>
                                                            <td>Avaiable balace</td>
                                                            <td>200<img src="assets/images/star.png" style="height:14px"></td>
                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

                                                            </td>
                                                            
                                                            <td>
                                                            <a href="<?php echo base_url('user_details?user_id='.$user['user_id']); ?>" class="btn btn-info btn-sm">
        <i class="fa fa-eye"></i>
    </a>
                                                                <a href="#" class="btn btn-danger btn-sm sa-warning">
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
                                            <!-- </div> -->
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