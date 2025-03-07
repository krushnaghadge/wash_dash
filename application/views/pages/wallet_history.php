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
                                       
                                        <li class="breadcrumb-item active">Wallet History</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Wallet History</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                               
                                                <table id="datatable" class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.No.</th>
                                                            <th>Date / Time</th>
                                                            <th>Status Amount</th>
                                                            <th>Total Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><span>07-02/2023 (2:00PM)</span></td>
                                                            <td><span class="text-success">Credited</span></td>
                                                            <td><span class="text-success">
                                                                    SAR 15</span></td>

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><span>07-02/2023 (2:00PM)</span></td>
                                                            <td><span class="text-danger">Debited</span></td>
                                                            <td><span class="text-danger">
                                                                    SAR 15</span></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p id="notData" class="text-danger">Data are not
                                                    available
                                                </p>
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