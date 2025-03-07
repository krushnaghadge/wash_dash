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
                <div class="wraper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center img-gradient" style="background-image:url('assets/images/4.jpg')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="assets/images/users/avatar-1.jpg" class="avatar-xl rounded-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white">Jay Belkar </h3>
                                    <div class="user-profile-info">
                                        <h5 class="text-white">Invitation Code : #3456 </h5>

                                    </div>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>

                    <div class="row user-tabs">
                        <div class="col-md-12 col-xl-12">
                            <ul class="nav nav-tabs tabs-bordered nav-justified" role="tablist">
                                <li class="nav-item tab">
                                    <a class="nav-link active" href="<?php echo base_url('driver_details') ?>" aria-controls="about" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                        <span class="d-none d-sm-block">About Driver </span>
                                    </a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link" href="<?php echo base_url('driver_details_new_order') ?>" role="tab" aria-controls="activities" aria-selected="false">

                                        <span class="d-none d-sm-block">New Orders</span>
                                        <!-- <span class="badge badge-info">3</span> -->
                                    </a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link" href="<?php echo base_url('driver_details_ongoing_order') ?>" aria-controls="projects" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Ongoing Order</span>
                                    </a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link" href="<?php echo base_url('driver_details_completed_order') ?>" aria-controls="setting" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Completed Order</span>
                                    </a>
                                </li>

                                <li class="nav-item tab">
                                    <a class="nav-link" href="<?php echo base_url('driver_details_rating') ?>" aria-controls="rating" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Rating</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="tab-content profile-tab-content">
                                <div class="tab-pane show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <div class="row mt-4">

                                        <div class="col-md-7">
                                            <div class="card">
                                                <p class="mt-2 mr-2 ml-2">Total Orders</p>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4 text-center">
                                                            <div class="orders completed_t">
                                                                15</div>
                                                            <b>Total Completed Order</b>
                                                        </div>
                                                        <div class="col-md-4 text-center">
                                                            <div class="orders current_t">
                                                                01 </div>
                                                            <b>Total Current Order</b>
                                                        </div>
                                                        <div class="col-md-4 text-center">
                                                            <div class="orders pending_t">
                                                                02 </div>
                                                            <b>Total Pending Order</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card">
                                                <p class="mt-2 mr-2 ml-2">Total Rides</p>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6 text-center">
                                                            <div class="orders completed_t">
                                                                15</div>
                                                            <b>Delivered to Customer</b>
                                                        </div>

                                                        <div class="col-md-6 text-center">
                                                            <div class="orders pending_t">
                                                                02 </div>
                                                            <b>Delivered to Vendor</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <!-- Personal-Information -->
                                            <div class="card card-default card-fill">
                                                <div class="card-header">
                                                    <h3 class="card-title">Driver Information</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Driver Name</strong>
                                                                <br>
                                                                <p class="text-muted">Jay Belkar </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Mobile</strong>
                                                                <br>
                                                                <p class="text-muted">9877676767 </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Email</strong>
                                                                <br>
                                                                <p class="text-muted">jaybelkar@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>State</strong>
                                                                <br>
                                                                <p class="text-muted">Maharashtra</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>City</strong>
                                                                <br>
                                                                <p class="text-muted">Pune</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Invitaion Code</strong>
                                                                <br>
                                                                <p class="text-muted">#4567</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Vehicle Type</strong>
                                                                <br>
                                                                <p class="text-muted">SUV</p>
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                            <div class="card card-default card-fill">
                                                <div class="card-header">
                                                    <h3 class="card-title">Vehicle Details</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Vehicle Type</strong>
                                                                <br>
                                                                <p class="text-muted">Sedan </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Vehicle No.</strong>
                                                                <br>
                                                                <p class="text-muted">MH12 BM 2345 </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="about-info-p">
                                                                <strong>Vehicle Model</strong>
                                                                <br>
                                                                <p class="text-muted">Demo</p>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </div>
                                            </div>

                                            <!-- Personal-Information -->

                                            <!-- Languages -->
                                            <div class="card card-default card-fill">
                                                <div class="card-header">
                                                    <h3 class="card-title">Driver Documnets</h3>
                                                </div>
                                                <div class="card-body">


                                                    <div class="row ">
                                                        <div class="col-md-3">
                                                            <div class="card">
                                                                <div class="card-header text-center">
                                                                    <b>Driving License </b>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="invoice-col  ">

                                                                        </div>
                                                                        <div class="ml-1 mr-1">
                                                                            <div class="float-right ">
                                                                                <div class="dropdown">
                                                                                    <button class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;">

                                                                                        <i class="mdi mdi-chevron-down"></i>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                                                        <li><a href="#" class="dropdown-item">Verify</a>
                                                                                        </li>
                                                                                        <li><a href="#" class="dropdown-item">Reject
                                                                                            </a></li>


                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="port mb-3 text-center">

                                                                        <div class="gal-detail card p-2">
                                                                            <a href="assets/images/shop_act.png" class="image-popup">
                                                                                <img src="assets/images/shop_act.png" class="thumb-img" alt="" style="height: 107px; width: 127px;">
                                                                                <div class="ribbon">
                                                                                    <strong><span class="text-warning">Pending</span></strong>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="card">
                                                                <div class="card-header text-center">
                                                                    <b>Vehicle Documnets </b>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="invoice-col  ">

                                                                        </div>
                                                                        <div class="ml-1 mr-1">
                                                                            <div class="float-right ">
                                                                                <div class="dropdown">
                                                                                    <button class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;">

                                                                                        <i class="mdi mdi-chevron-down"></i>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                                                        <li><a href="#" class="dropdown-item">Verify</a>
                                                                                        </li>
                                                                                        <li><a href="#" class="dropdown-item">Reject
                                                                                            </a></li>


                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="port mb-3 text-center">

                                                                        <div class="gal-detail card p-2">
                                                                            <a href="assets/images/reg_doc.png" class="image-popup">
                                                                                <img src="assets/images/reg_doc.png" class="thumb-img" alt="" style="height: 107px; width: 127px;">
                                                                                <div class="ribbon">
                                                                                    <strong><span class="text-success">Verified</span></strong>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="card">
                                                                <div class="card-header text-center">
                                                                    <b>Driver Photo ID </b>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="invoice-col  ">

                                                                        </div>
                                                                        <div class="ml-1 mr-1">
                                                                            <div class="float-right ">
                                                                                <div class="dropdown">
                                                                                    <button class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;">

                                                                                        <i class="mdi mdi-chevron-down"></i>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                                                        <li><a href="#" class="dropdown-item">Verify</a>
                                                                                        </li>
                                                                                        <li><a href="#" class="dropdown-item">Reject
                                                                                            </a></li>


                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="port mb-3 text-center">

                                                                        <div class="gal-detail card p-2">
                                                                            <a href="assets/images/vendor_photo.png" class="image-popup">
                                                                                <img src="assets/images/vendor_photo.png" class="thumb-img" alt="" style="height: 107px; width: 127px;">
                                                                                <div class="ribbon">
                                                                                    <strong><span class="text-warning">Pending</span></strong>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>



                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->

                    <!-- end page title -->

                    <div class="row">

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
                                                <div class="bar-5" style="width: 10%;height: 8px;background-color: #04AA6D;"></div>
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
                                                <div class="bar-4" style="width: 20% ; height: 8px; background-color: #2196F3;"></div>
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
                                                <div class="bar-3" style="width: 40% ; height: 8px; background-color: #00bcd4;"></div>
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
                                                <div class="bar-2" style="width: 50% ; height: 8px; background-color: #ff9800;"></div>
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
                                                <div class="bar-1" style="width: 5% ; height: 8px; background-color: #f44336;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <!-- End Page content -->
        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <?php include 'commonfiles/script.php' ?>

</body>

</html>