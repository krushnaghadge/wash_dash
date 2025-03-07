<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <style>
        #notData {
            display: none;
            text-align: center;
        }
    </style>
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
                                <!-- <h4 class="page-title">Profile Managemnt</h4> -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo base_url('dashboard') ?>">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo base_url('user_management') ?>">User Management</a>
                                        </li>
                                        <li class="breadcrumb-item active">User Details</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card card-default card-fill">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">Personal Information</h3>
                                </div> -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </div>
                                    <div class="about-info-p row">
                                        <div class="col-md-3">
                                            <strong> Name</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted"> John Deo</p>
                                        </div>
                                    </div>
                                    <div class="about-info-p row">
                                        <div class="col-md-3">
                                            <strong>Mob No</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted">(123) 123 1234</p>
                                        </div>
                                    </div>
                                    <div class="about-info-p row">
                                        <div class="col-md-3">
                                            <strong>Email</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted">johnathandeon @moltran.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="">
                                    <ul class="nav nav-tabs tabs-bordered" role="tablist">
                                        <li class="nav-item tab">
                                            <a class="nav-link" href="<?php echo base_url('user_details') ?>">
                                                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                                <span class="d-none d-sm-block">Current order</span>
                                            </a>
                                        </li>
                                        <li class="nav-item tab">
                                            <a class="nav-link active" href="<?php echo base_url('user_cancelled_order') ?>">
                                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                                <span class="d-none d-sm-block">Cancel order</span>
                                            </a>
                                        </li>
                                        <li class="nav-item tab">
                                            <a class="nav-link" href="<?php echo base_url('user_completed_order') ?>">
                                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                                <span class="d-none d-sm-block">Completed order</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content profile-tab-content">
                                        <div class="tab-pane active" id="cancel" aria-labelledby="activities-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <div id="example3_filter" class="dataTables_filter" style="float:right;">
                                                            <label>
                                                                <input type="search" placeholder="Search" class=" form-control search-input" aria-controls="example3" data-table="table_list"></label>
                                                        </div>
                                                        <table class="table text-center table-hover table_list sortable table-nowrap mb-4">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr No</th>
                                                                    <th>Date/Time</th>
                                                                    <th>Order ID</th>
                                                                    <th>Selected Service Type</th>
                                                                    <th>Selected Cloth Type</th>
                                                                    <th>Quantity</th>
                                                                    <th>Price</th>
                                                                    <th>Pickup Location</th>
                                                                    <th>Dropped Location</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>2023-04-25 05:05 PM</td>
                                                                    <td>#56789</td>
                                                                    <td>Laundry </td>
                                                                    <td>Dress</td>
                                                                    <td>1</td>
                                                                    <td>₹ 200</td>
                                                                    <td>Appzia Technologies, Clover Park, Viman Nagar, Pune.</td>
                                                                    <td>
                                                                        Adira,Behind star bazaar,Wagholi,Pune.
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge badge-danger">Order Cancelled</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p id="notData" class="text-danger">Data are not
                                                            available
                                                        </p>
                                                    </div>
                                                    <ul class="pagination text-right">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <i class="fa fa-angle-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <i class="fa fa-angle-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
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
            </div>
            <!-- End Page content -->
        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <?php include 'commonfiles/script.php' ?>
        <!-- data not found message  -->
        <script>
            function countROW() {
                // alert("hii")
                var numOfVisibleRows = $('tbody tr').filter(function() {
                    return $(this).css('display') !== 'none';
                }).length;
                console.log(numOfVisibleRows);
                if (numOfVisibleRows != 0) {

                    document.getElementById("notData").style.display = "none";
                    // console.log("data is fond")

                } else {
                    document.getElementById("notData").style.display = "block";
                    // console.log("Not Found")
                }
            }
        </script>

</body>

</html>