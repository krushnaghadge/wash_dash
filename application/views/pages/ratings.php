<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <style>
    #notData {
        display: none;
        text-align: center;
    }

    .nav-tabs .nav-link.active {
        color: #f3f3f3;
        background-color: #2490d4;
        /* border-color: #eee #eee #fff; */
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
                                        <li class="breadcrumb-item active">Driver Charges</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <!-- end col -->

                        <div class="col-lg-12">
                            <div class="card-box">
                                <ul class="nav nav-tabs tabs-bordered nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-b2-tab" data-toggle="tab" href="#home-b2"
                                            role="tab" aria-controls="home-b2" aria-selected="true">
                                            <span class="d-block d-sm-none"><i
                                                    class="mdi mdi-home-variant-outline font-18"></i></span>
                                            <span class="d-none d-sm-block">Users Rating</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-b2-tab" data-toggle="tab" href="#profile-b2"
                                            role="tab" aria-controls="profile-b2" aria-selected="false">
                                            <span class="d-block d-sm-none"><i
                                                    class="mdi mdi-account-outline font-18"></i></span>
                                            <span class="d-none d-sm-block">Vendor Ratings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="message-b2-tab" data-toggle="tab" href="#message-b2"
                                            role="tab" aria-controls="message-b2" aria-selected="false">
                                            <span class="d-block d-sm-none"><i
                                                    class="mdi mdi-email-outline font-18"></i></span>
                                            <span class="d-none d-sm-block">Driver Ratings</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home-b2" role="tabpanel"
                                        aria-labelledby="home-b2-tab">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">
                                                        User Rating List



                                                    </h4>
                                                   
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                  <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr.No</th>
                                                                            <th>Order Id</th>
                                                                            <th>Service </th>
                                                                            <th>Review by Driver </th>
                                                                            <th>Date |Time</th>
                                                                            <th>Customer </th>
                                                                            <th>Rating</th>
                                                                            <th>Order Details</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
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
                                    <div class="tab-pane show" id="profile-b2" role="tabpanel"
                                        aria-labelledby="profile-b2-tab">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">
                                                        Vendor Rating List



                                                    </h4>
                                                   
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                  <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr.No</th>
                                                                            <th>Order Id</th>
                                                                            <th>Service </th>
                                                                            <th>Review by User </th>
                                                                            <th>Date |Time</th>
                                                                            <th>Vendor </th>
                                                                            <th>Rating</th>
                                                                            <th>Order Details</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
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
                                    <div class="tab-pane" id="message-b2" role="tabpanel"
                                        aria-labelledby="message-b2-tab">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">
                                                        Driver Rating List

                                                    </h4>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                  <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr.No</th>
                                                                            <th>Order Id</th>
                                                                            <th>Service </th>
                                                                            <th>Review by User </th>
                                                                            <th>Date |Time</th>
                                                                            <th>Driver </th>
                                                                            <th>Rating</th>
                                                                            <th>Order Details</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>#234</td>
                                                                            <td>Laundry</td>
                                                                            <td>Anshu Mishra</td>
                                                                            <td>2-2-23 |12:00pm</td>
                                                                            <td>Jay Belkar</td>
                                                                            <td>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                <span> <b>( 1.5)</b></span>
                                                                            </td>
                                                                            <td><a href="<?php echo base_url('order_details')?>"
                                                                                    class="btn btn-success btn-sm"><i
                                                                                        class=" fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a>
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

                                </div>

                            </div>
                        </div>
                        <!-- end col -->
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