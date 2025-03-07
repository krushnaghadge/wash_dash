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
                                    <a class="nav-link " href="<?php echo base_url('driver_details') ?>" aria-controls="about" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                        <span class="d-none d-sm-block">About Driver </span>
                                    </a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link " href="<?php echo base_url('driver_details_new_order') ?>" role="tab" aria-controls="activities" aria-selected="false">

                                        <span class="d-none d-sm-block">New Orders</span>
                                        <!-- <span class="badge badge-info">3</span> -->
                                    </a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link " href="<?php echo base_url('driver_details_ongoing_order') ?>" aria-controls="projects" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Ongoing Order</span>
                                    </a>
                                </li>
                                <li class="nav-item tab">
                                    <a class="nav-link " href="<?php echo base_url('driver_details_completed_order') ?>" aria-controls="setting" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Completed Order</span>
                                    </a>
                                </li>

                                <li class="nav-item tab">
                                    <a class="nav-link active" href="<?php echo base_url('driver_details_rating') ?>" aria-controls="rating" aria-selected="false">
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

                                <div class="tab-pane show active" id="rating" aria-labelledby="complete-tab">

                                    <!-- Personal-Information -->
                                    <div class="card mt-3 card-default card-fill">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">
                                                Ratings
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
                                                                    <th>Date|Time</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Mobile</th>
                                                                    <th>Email Id</th>
                                                                    <th>Avg Rating</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>26-6-24|12:36pm</td>

                                                                    <td>Jay Belkar</td>
                                                                    <td>9898786767</td>
                                                                    <td><span>jay@gmail.com</span></td>
                                                                    <td>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>

                                                                        <span> <b>( 1.5)</b></span>
                                                                    </td>




                                                                </tr>

                                                            </tbody>
                                                            <tfoot></tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
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