<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>
<style>
.toggle-handle {
    background-color: aliceblue;
}
</style>

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
                                        <li class="breadcrumb-item active">User Wallet Managemnt</li>
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
                                    <h3 class="card-title">User Wallet Managemnt</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Sr No</th>
            <th>Profile</th>
            <th>User Name</th>
            <th>Mobile No</th>
            <th>Total Wallet Amt</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data will be injected here via AJAX -->
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
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
   
    var apiUrl = 'https://yourdomain.com/api/';
    
    $.ajax({
        //url: apiUrl,
        url: "<?php echo base_url('get_user_wallet_amt'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if(response.status === "success") {
                var rows = '';
                $.each(response.data, function(index, wallet) {
                    var srNo = index + 1;
                    
                  
                    var profileImg = '<div class="inbox-item-img"><img src="assets/images/users/avatar-' + wallet.wallet_user_id + '.jpg" onerror="this.onerror=null; this.src=\'assets/images/users/default.jpg\';" class="rounded-circle" alt="" style="height: 35px;"></div>';
                    
                    
                    var userName = "User " + wallet.wallet_user_id;
                    var mobileNo = "9876543210"; 
                    var walletAmt = "SAR " + wallet.wallet_current_balance;
                    
                   
                    var actionBtn = '<a href="<?php echo base_url("wallet_history")?>" class="btn btn-success btn-sm"><strong><span class="text-white">Wallet transaction</span></strong></a>';
                    
                    rows += '<tr>' +
                                '<td>' + srNo + '</td>' +
                                '<td>' + profileImg + '</td>' + 
                                '<td>' + userName + '</td>' +
                                '<td>' + mobileNo + '</td>' +
                                '<td>' + walletAmt + '</td>' +
                                '<td>' + actionBtn + '</td>' +
                            '</tr>';
                });
                $('#datatable tbody').html(rows);
            } else {
                $('#datatable tbody').html('<tr><td colspan="6">No wallet data found.</td></tr>');
            }
        },
        error: function(xhr, status, error) {
            console.error("Error fetching wallet data:", error);
            $('#datatable tbody').html('<tr><td colspan="6">Error fetching wallet data.</td></tr>');
        }
    });
});
</script>
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


</body>

</html>