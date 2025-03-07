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
                                            <a href="<?php echo base_url('driver_management') ?>">Driver Management</a>
                                        </li>
                                        <li class="breadcrumb-item active">Driver Details</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-default card-fill">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </div>
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Full Name</b> <a style="float:right;">John Deo</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Mobile No</b> <a style="float:right;">9021331139</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email Id </b> <a style="float:right;">johndeo@gmail.com</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b> Wallet Balance </b> <a style="float:right;">1,000 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center">Driver Rating <i class="fa fa-star" style="color: orange;"></i></h4>
                                    <hr>
                                    <div class="rat">
                                        <div class="side">
                                            <div>5 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width: 10%;height: 18px;background-color: #04AA6D;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>10</div>
                                        </div>
                                        <div class="side">
                                            <div>4 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-4" style="width: 20% ; height: 18px; background-color: #2196F3;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>15</div>
                                        </div>
                                        <div class="side">
                                            <div>3 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-3" style="width: 40% ; height: 18px; background-color: #00bcd4;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>7</div>
                                        </div>
                                        <div class="side">
                                            <div>2 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-2" style="width: 50% ; height: 18px; background-color: #ff9800;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>50</div>
                                        </div>
                                        <div class="side">
                                            <div>1 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-1" style="width: 5% ; height: 18px; background-color: #f44336;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 text-center">
                                            <div class="orders completed_t">
                                                15</div>
                                            <b>Total Completed Order</b>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <div class="orders current_t">
                                                01 </div>
                                            <b>Total Current Order</b>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="orders pending_t">
                                                02 </div>
                                            <b>Total Pending Order</b>
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
                                            <a class="nav-link" href="<?php echo base_url('driver_details') ?>">
                                                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                                <span class="d-none d-sm-block">Vehicle Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item tab">
                                            <a class="nav-link" href="<?php echo base_url('driver_current_order') ?>">
                                                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                                <span class="d-none d-sm-block">Current order</span>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item tab">
                                            <a class="nav-link" href="<?php echo base_url('driver_pending_order') ?>">
                                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                                <span class="d-none d-sm-block">Pending order</span>
                                            </a>
                                        </li> -->
                                        <li class="nav-item tab">
                                            <a class="nav-link active" href="<?php echo base_url('driver_completed_order') ?>">
                                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                                <span class="d-none d-sm-block">Completed Order</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
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
                                                            <th>Order ID</th>
                                                            <th>Date/Time</th>
                                                            <th>Customer Name</th>
                                                            <th>Order Type</th>
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
                                                            <td>#2345</td>
                                                            <td>2023-04-25 05:05 PM</td>
                                                            <td>Jay Sharma</td>
                                                            <td>Customer</td>
                                                            <td>Laundry </td>
                                                            <td>Dress</td>
                                                            <td>1</td>
                                                            <td>₹ 200</td>
                                                            <td>
                                                                Adira,Behind star bazaar,Wagholi,Pune.
                                                            </td>
                                                            <td>
                                                                Adira,Behind star bazaar,Wagholi,Pune.
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-success">Order Completed</span>
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