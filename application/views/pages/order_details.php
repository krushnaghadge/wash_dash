<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
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
                                <!-- <h4 class="page-title">User Managemnt</h4> -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">User Managemnt</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center text-info">Order Details</h4>

                                    <div class="">
                                        <div class="invoice p-3 mb-3">
                                            <div class="row invoice-info">
                                                <div class="col-sm-6 invoice-col mb-4">

                                                    <!-- <b>Orders Details</b><br> -->
                                                    <br>
                                                    <b>Order ID:</b> MMG20240617-266 <br>
                                                    <b>Order Placed date &amp; time:</b>
                                                    10:08 AM,17 Jun,2024 <br>
                                                    <b>Payment Status:</b>
                                                    Success <br>
                                                    <b>Total amount:</b> SAR 138

                                                </div>
                                                <div class="col-sm-6 invoice-col mb-4">

                                                    <br>
                                                    <b>Service Type:</b> Laundry <br>

                                                    <b>Payment Status:</b>
                                                    Pending <br>


                                                </div>


                                            </div>
                                            <div class="row invoice-info">
                                                <div class="col-sm-6 invoice-col mb-4">

                                                    <b>Customer Details</b><br>
                                                    <br>
                                                    <b>Customer Name:</b> User test<br>
                                                    F-566, , FQ4F+5P6, Nanded City Rd, Nanded, Pune, Maharashtra 411041,
                                                    India <br>
                                                    <b>Email Id:</b>
                                                    abc@gmail.com <br>
                                                    <b>Mobile:</b>
                                                    9878676767 <br>

                                                </div>
                                                <div class="col-sm-6 invoice-col mb-4">
                                                    <b>Vendor Details</b><br>
                                                    <br>
                                                    <b>Vendor Name:</b> Vendor test<br>
                                                    F-566, , FQ4F+5P6, Nanded City Rd, Nanded, Pune, Maharashtra 411041,
                                                    India <br>
                                                    <b>Email Id:</b>
                                                    abc@gmail.com <br>
                                                    <b>Mobile:</b>
                                                    9878676767 <br>
                                                </div>


                                            </div>

                                            <div class="col-md-12">

                                                <div class="card  ">
                                                    <div class="col-md-3 mt-3 offset-md-4">
                                                        <div class=" text-center mr-2 ml-2">
                                                            <a href="#" class="btn btn-outline-info btn-block"><b><span
                                                                        class="text-black">
                                                                        Laundry</span></b></a>
                                                        </div>
                                                    </div>
                                                    <div class="invoice-col mt-2">
                                                        <b>Special Instruction:</b> Air dry delicate items, Remove
                                                        coffee stains on shirts<br>

                                                    </div>


                                                    <div class="col-lg-12">
                                                        <!-- <div class="card"> -->
                                                        <!-- <div class="card-header">
                                                                <h3 class="card-title">Striped rows Table</h3>
                                                            </div> -->
                                                        <!-- <div class="card-body"> -->
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                      <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Cloth Type</th>
                                                                                <th>Unit Price</th>
                                                                                <th>Qty(Pcs)</th>
                                                                                <th>Total Price</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Shirt</td>
                                                                                <td>SAR 10</td>

                                                                                <td>3</td>
                                                                                <td>SAR 10</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2</td>
                                                                                <td>Towel</td>
                                                                                <td>SAR 10</td>

                                                                                <td>2</td>
                                                                                <td>SAR 20</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3</td>
                                                                                <td>Pants</td>
                                                                                <td>SAR 10</td>

                                                                                <td>3</td>
                                                                                <td>SAR 20</td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- </div>
                                                    </div> -->


                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6 offset-md-6">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Subtotal:</th>
                                                                    <td>SAR 150 + 200 <img src="assets/images/star.png"
                                                                            alt="" style="height:18px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th> Discount:</th>
                                                                    <td> - SAR 12</td>
                                                                </tr>

                                                                <tr>
                                                                    <th> Delivery Charges:</th>
                                                                    <td> SAR 20</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Order Total:</th>
                                                                    <td>SAR 138 + 200 <img src="assets/images/star.png"
                                                                            alt="" style="height:18px"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="">
                                                <div class="col-12 text-center">
                                                    <a href="" class=" btn btn-success"><i class="fas fa-print"></i>
                                                        Print</a>

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
            <!-- end content -->

            <!-- Footer Start -->
            <?php include 'commonfiles/footer.php' ?>
            <!-- end Footer -->

        </div>
    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>

</body>

</html>