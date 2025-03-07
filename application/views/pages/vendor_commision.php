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
                                        <li class="breadcrumb-item active">Manage Vendor Commision</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Manage Vendor Commision</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">

                                        <div class="form-group row">
                                            <label class="control-label" for=""> Commision(%)</label>
                                            <div class="input-group">

                                                <input type="text" name="" class="form-control" placeholder="">
                                                <span class="input-group-prepend">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-success">
                                                        <i class="fa fa-percent"></i> </button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center mt-3">
                                            <button type="button" class="btn btn-primary waves-effect waves-light ">
                                                Update Commision
                                            </button>
                                        </div>
                                    </form>
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