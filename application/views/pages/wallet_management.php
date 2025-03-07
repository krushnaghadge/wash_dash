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
                                        <li class="breadcrumb-item active">Wallet Management</li>
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
                                    <h3 class="card-title">Wallet Management</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="d-flex">
                                                <select id="inputState" class="form-control default-select select_dropdown wide">
                                                    <option selected="true" disabled="disabled">
                                                        Select User....
                                                    </option>
                                                    <option value="">Customer</option>
                                                    <option>Vendor</option>
                                                    <option value="">Driver</option>
                                                </select>
                                                <button name="search" type="submit" class="btn btn-warning btn-md" style="border-radius:5px;"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-striped table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Type Of User</th>
                                                            <th>Name</th>
                                                            <th>Email ID</th>
                                                            <th>Mobile No</th>
                                                            <th>Total Wallet Amount</th>
                                                            <th>Last Added Amount /D(T)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Customer</td>
                                                            <td>Shree</td>
                                                            <td>shree@gmail.com</td>
                                                            <td>9876543210</td>
                                                            <td>
                                                                <span>₹ 12007</span>
                                                            </td>
                                                            <td>
                                                                <span>₹500</span><br>
                                                                <span>07-02/2023 (2:00PM)</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".edit_modal">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                                <a href="<?php echo base_url('wallet_history') ?>" title="Wallet History" class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-file"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Vendor</td>
                                                            <td>Jay</td>
                                                            <td>jay@gmail.com</td>
                                                            <td>9876543210</td>
                                                            <td>
                                                                <span>₹ 5432</span>
                                                            </td>
                                                            <td>
                                                                <span>₹430</span><br>
                                                                <span>07-02/2023 (2:00PM)</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".edit_modal">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                                <a href="<?php echo base_url('wallet_history') ?>" title="Wallet History" class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-file"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Driver</td>
                                                            <td>John</td>
                                                            <td>john@gmail.com</td>
                                                            <td>9876543210</td>
                                                            <td>
                                                                <span>₹ 76543</span>
                                                            </td>
                                                            <td>
                                                                <span>₹5050</span><br>
                                                                <span>07-02/2023 (2:00PM)</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".edit_modal">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                                <a href="<?php echo base_url('wallet_history') ?>" title="Wallet History" class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-file"></i>
                                                                </a>
                                                            </td>
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
                        <!-- end content -->

                        <!-- edit modal  -->
                        <div class="modal fade edit_modal" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" style="padding-right: 17px;" aria-modal="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myCenterModalLabel">Add Amount In Wallet</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <div class="basic-form">
                                                <form class="add-product">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="ForminputState" class="form-label">Enter Amount</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text">₹</div>
                                                                    <input type="Number" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="submit" class="btn btn-danger css_btn" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success css_btn" data-bs-dismiss="modal">Add</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!-- end edit modal -->
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