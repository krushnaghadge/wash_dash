<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
</head>

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
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Order Managemnt</li>
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
                                    <h3 class="card-title">Ready to Delivered Orders</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                 <table id="datatable" class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Order ID</th>
                                                            <th>Order Date | Time</th>
                                                            <th>Customer </th>
                                                            <th>Vendor </th>
                                                            <th>Mobile</th>
                                                            <th>Amount</th>
                                                            <th>Order Status</th>
                                                            <th>Payment Status</th>
                                                            <th>Order Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <span> #12321</span>
                                                            </td>
                                                            <td>
                                                                <span>13 May 2024 11:00am</span>
                                                            </td>
                                                            <td>
                                                                <span>Jay Belkar</span>
                                                            </td>
                                                            <td>
                                                                <span>Raj Sharma</span>
                                                            </td>
                                                            <td>9878786765</td>

                                                            <td>
                                                                <span>SAR 40</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-info">Ready to Deliever</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-danger fw-bold"> Pending</span>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: "<?php echo base_url('readytodeliver_order'); ?>",
             method: "GET",
            dataType: "json",
            success: function (response) {
                if (response.status === "success" && response.data.length > 0) {
                    let tableBody = $("#datatable tbody");
                    tableBody.empty(); // Clear existing rows
                    response.data.forEach((order, index) => {
                        let orderStatusClass = order.order_status === "picked_up" ? "text-info" : "text-warning";
                        let paymentStatusClass = order.order_payment_status === "paid" ? "text-success fw-bold" : "text-danger fw-bold";
                        
                        let newRow = `
                            <tr>
                                <td>${index + 1}</td>
                                <td>#${order.order_id}</td>
                                <td>${order.order_created_at}</td>
                                <td>User ID: ${order.order_user_id}</td>
                                <td>Vendor ID: ${order.order_vendor_id}</td>
                                <td>N/A</td>
                                <td>SAR ${order.order_total_amount}</td>
                                <td><span class="${orderStatusClass}">${order.order_status.replace("_", " ")}</span></td>
                                <td><span class="${paymentStatusClass}">${order.order_payment_status}</span></td>
                                <td>
                                    <a href="order_details.php?id=${order.order_id}" class="btn btn-success btn-sm">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        `;
                        tableBody.append(newRow);
                    });
                } else {
                    $("#datatable tbody").append('<tr><td colspan="10" class="text-center">No orders found</td></tr>');
                }
            },
            error: function () {
                $("#datatable tbody").append('<tr><td colspan="10" class="text-center text-danger">Error fetching data</td></tr>');
            }
        });
    });
</script>
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>

</body>

</html>