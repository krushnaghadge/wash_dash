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
                                        <li class="breadcrumb-item active">User Managemnt</li>
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
                                    <h3 class="card-title">New Orders</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%;">
    <thead>
        <tr>
            <th>Sr No</th>
            <th>Order ID</th>
            <th>Order Date | Time</th>
            <th>Customer</th>
            <th>Amount</th>
            <th>Order Status</th>
            <th>Payment Status</th>
            <th>Assign Order</th>
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
                    <div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Order to Vendor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="assignVendorForm">
                <div class="modal-body">
                    <div class="col-lg-12 vendor-radio-container">
                        <!-- Radio inputs will be appended here dynamically -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Send</button>
                </div>
            </form>
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
            url: "<?php echo base_url('fetch_orders'); ?>",
            type: "GET",
            dataType: "json",
            success: function(response) {
   // console.log(response); // Debug
    var tableBody = "";
    if (response.length > 0) {
        $.each(response, function(index, order) {
            tableBody += `
                <tr>
                    <td>${index + 1}</td>
                    <td>#${order.order_id}</td>
                    <td>${order.order_created_at}</td>
                    <td>${order.order_user_id}</td>
                    <td>${order.order_total_amount}</td>
                    <td>
                        <select class="form-control">
                            <option ${order.order_status == 'pending' ? 'selected' : ''}>Pending</option>
                            <option ${order.order_status == 'accepted' ? 'selected' : ''}>Accepted</option>
                            <option ${order.order_status == 'cancelled' ? 'selected' : ''}>Cancelled</option>
                        </select>
                    </td>
                    <td class="text-danger fw-bold">${order.order_payment_status}</td>
                    <td>
                        <a data-target="#add-modal" data-toggle="modal" class="btn btn-info btn-sm waves-effect waves-light">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo base_url('order_details'); ?>" class="btn btn-success btn-sm">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>`;
        });
    } else {
        tableBody = `<tr><td colspan="9" class="text-center">No orders found.</td></tr>`;
    }

    $("#orderTableBody").html(tableBody);
}

        });
    }
});
</script>



<script>
$(document).ready(function() {
    // Function to load vendor data
    function loadVendors() {
        $.ajax({
            url: "<?php echo base_url('get_vendor'); ?>",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if(response.status === 'success') {
                    var vendors = response.data;
                    var radioHtml = '';
                    $.each(vendors, function(index, vendor) {
                        radioHtml += '<div class="radio radio-info form-check-inline">' +
                                        '<input type="radio" id="vendor_' + vendor.vendor_id + '" value="' + vendor.vendor_id + '" name="vendor" ' + (index === 0 ? 'checked="checked"' : '') + '>' +
                                        '<label for="vendor_' + vendor.vendor_id + '"> ' + vendor.vendor_name + ' </label>' +
                                     '</div>';
                    });
                    
                    $('.vendor-radio-container').html(radioHtml);
                } else {
                    $('.vendor-radio-container').html('<p>No vendors found.</p>');
                }
            },
            error: function(xhr, status, error) {
                console.error("Error loading vendors:", error);
                $('.vendor-radio-container').html('<p>Error loading vendors.</p>');
            }
        });
    }

    // Option 1: Load vendors when the page loads.
    loadVendors();

    // Option 2: Load vendors each time the modal is shown (if vendors may change)
    // $('#add-modal').on('show.bs.modal', function() {
    //     loadVendors();
    // });
});
</script>


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>

</body>

</html>