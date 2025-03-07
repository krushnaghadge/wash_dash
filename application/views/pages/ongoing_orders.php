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
                                    <h3 class="card-title">Ongoing Orders</h3>
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
                                                    <tbody id="orderTableBody">
                                        
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
        $(document).ready(function() {
            fetchOrders();

            function fetchOrders() {
                $.ajax({
                   url: "<?php echo base_url('inprocess_order'); ?>",
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.status === "success") {
                            let orders = response.data;
                            let tableBody = $("#orderTableBody");
                            tableBody.empty(); // Clear existing rows
                            let srNo = 1;

                            orders.forEach(order => {
                                let orderRow = `
                                    <tr>
                                        <td>${srNo++}</td>
                                        <td>#${order.order_id}</td>
                                        <td>${order.order_created_at}</td>
                                        <td>User ID: ${order.order_user_id}</td>
                                        <td>Vendor ID: ${order.order_vendor_id}</td>
                                        <td>Not Available</td>
                                        <td>SAR ${order.order_total_amount}</td>
                                        <td><span class="text-warning">${order.order_status}</span></td>
                                        <td><span class="text-danger fw-bold">${order.order_payment_status}</span></td>
                                        <td>
                                            <a href="order_details.php?order_id=${order.order_id}" class="btn btn-success btn-sm">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                `;
                                tableBody.append(orderRow);
                            });

                            $("#datatable").DataTable(); // Initialize DataTable
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching orders:", error);
                    }
                });
            }
        });
    </script>
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>

</body>

</html>