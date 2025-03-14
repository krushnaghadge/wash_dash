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
                                        <h3 class="text-white">Jay Belkar </h3>
                                        <div class="user-profile-info">
                                            <h5 class="text-white mt-2">Available Points : 200 <img src="assets/images/star.png" style="height:15px" alt=""> </h5>

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
                                        <a class="nav-link " href="<?php echo base_url('user_details') ?>" role="tab" aria-controls="about" aria-selected="true">
                                            <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                            <span class="d-none d-sm-block">About Customer </span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" href="<?php echo base_url('user_details_new_order') ?>" role="tab" aria-controls="activities" aria-selected="false">

                                            <span class="d-none d-sm-block">New Orders</span>
                                            <!-- <span class="badge badge-info">3</span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link " href="<?php echo base_url('user_details_inprocess_order') ?>" role="tab" aria-controls="projects" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">In-Process Order</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link active" href="<?php echo base_url('user_details_ready_deliver') ?>" role="tab" aria-controls="setting" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Ready to Delivered Order</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" href="<?php echo base_url('user_details_completed_order') ?>" role="tab" aria-controls="complete" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Completed Order</span>
                                        </a>
                                    </li>
                                    <li class="nav-item tab">
                                        <a class="nav-link" href="<?php echo base_url('user_details_wallet') ?>" role="tab" aria-controls="wallet" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Wallet Transaction</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="tab-pane show active" id="setting" aria-labelledby="setting-tab">

                                    <!-- Personal-Information -->
                                    <div class="card mt-3 card-default card-fill">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">
                                                Ready to Delivered Orders
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
                                                                    <th>Order ID</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Total Amount</th>
                                                                    <th>Payment Status</th>
                                                                    <th>Order Status</th>
                                                                    <th>Order Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>26-6-24|12:36pm</td>
                                                                    <td>#232</td>

                                                                    <td>Jay Belkar</td>
                                                                    <td>SAR 20</td>
                                                                    <td><span class="badge badge-info">Pending</span>
                                                                    </td>
                                                                    <td><span class="text-primary">ready to
                                                                            delivered</span>
                                                                    </td>


                                                                    <td>
                                                                        <a href="<?php echo base_url('order_details') ?>" class="btn btn-info btn-sm">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>

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