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
                    <div class="wraper">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="bg-picture text-center img-gradient" style="background-image:url('assets/images/4.jpg')">
                                    <div class="bg-picture-overlay"></div>
                                    <div class="profile-info-name">
                                        <img src="assets/images/users/avatar-1.jpg" class="avatar-xl rounded-circle img-thumbnail" alt="profile-image">
                                        <h3 class="text-white">Demo Laundry</h3>
                                        <div class="user-profile-info">
                                            <h5 class="text-white">Contact Person : Jay Belkar </h5>
                                            <h6 class="text-white">Vendor Grading : <span class="badge badge-warning text-danger">Cheapest</span> </h6>

                                        </div>
                                    </div>
                                </div>
                                <!--/ meta -->
                            </div>
                        </div>

                        <div class="row user-tabs">
                            <div class="col-md-12 col-xl-12">
                                <ul class="nav nav-tabs tabs-bordered " role="tablist">
                                    <li class="nav-item tab">
                                        <a class="nav-link active" href="<?php echo base_url('vendor_details') ?>" role="tab" aria-controls="about" aria-selected="true">
                                            <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                            <span class="d-none d-sm-block">About Vendor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a href="<?php echo base_url('vendor_details_assign_order') ?>" class="nav-link" role="tab" aria-controls="activities" aria-selected="false">

                                            <span class="d-none d-sm-block">Assign Orders</span>
                                            <!-- <span class="badge badge-info">3</span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a href="<?php echo base_url('vendor_details_inprocess_order') ?>" class="nav-link" role="tab" aria-controls="projects" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">In-Process Order</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a href="<?php echo base_url('vendor_details_readytodeliverd_order') ?>" class="nav-link" role="tab" aria-controls="setting" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Ready to Delivered </span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a href="<?php echo base_url('vendor_details_completed_order') ?>" class="nav-link" role="tab" aria-controls="complete" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Completed Order</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a href="<?php echo base_url('vendor_details_rating') ?>" class="nav-link" aria-controls="rating" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Ratings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a href="<?php echo base_url('vendor_details_transaction_history') ?>" class="nav-link" role="tab" aria-controls="transaction" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Transaction History</span>
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
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3 text-center">
                                                                <div class="orders pending_t">
                                                                    15</div>
                                                                <b> New Order</b>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <div class="orders process_t">
                                                                    01 </div>
                                                                <b>In-Process Order</b>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <div class="orders current_t">
                                                                    02 </div>
                                                                <b>Ready to Delivery Order</b>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <div class="orders completed_t">
                                                                    22 </div>
                                                                <b>Completed</b>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Personal-Information -->
                                                <div class="card card-default card-fill">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Vendor Information</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="about-info-p">
                                                                    <strong>Compnay Name</strong>
                                                                    <br>
                                                                    <p class="text-muted">Demo Laundry </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="about-info-p">
                                                                    <strong>Contact Person Name</strong>
                                                                    <br>
                                                                    <p class="text-muted">Jay Belkar </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="about-info-p">
                                                                    <strong>Mobile</strong>
                                                                    <br>
                                                                    <p class="text-muted">9876767676</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="about-info-p">
                                                                    <strong>Email</strong>
                                                                    <br>
                                                                    <p class="text-muted">jaybelkar@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="about-info-p mb-0">
                                                                    <strong>State</strong>
                                                                    <br>
                                                                    <p class="text-muted mb-0">Maharshtra</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="about-info-p mb-0">
                                                                    <strong>City</strong>
                                                                    <br>
                                                                    <p class="text-muted mb-0">Pune</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="about-info-p mb-0">
                                                                    <strong>Address</strong>
                                                                    <br>
                                                                    <p class="text-muted mb-0">Wagholi,Pune</p>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                                <!-- Personal-Information -->

                                                <!-- Languages -->
                                                <div class="card card-default card-fill">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Vendor Documnets</h3>
                                                    </div>
                                                    <div class="card-body">


                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <div class="card">
                                                                    <div class="card-header text-center">
                                                                        <b>Vendor License </b>
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
                                                                        <b>Registration Documnets </b>
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