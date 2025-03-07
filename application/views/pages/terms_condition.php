<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

</head>
<style>
.toggle-handle {
    background-color: aliceblue;
}
</style>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <?php include 'commonfiles/header.php' ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include 'commonfiles/sidebar.php' ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <!-- <h4 class="page-title">Quilljs Editor</h4> -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Terms Condition</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Terms Condition</h3>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="row">
                                            <div class=" col-md-6 offset-md-3  form-group">
                                                <label for="field-1" class="control-label">Terms Condition
                                                    For :</label>
                                                <select class="form-control">
                                                    <option selected>Select Terms Condition For</option>

                                                    <option>Customer App</option>
                                                    <option>Vendor App</option>
                                                    <option>Driver App</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="  form-group">
                                                    <label for="field-1" class="control-label">Terms Condition :
                                                    </label>
                                                    <div class="summernote"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center mt-3">
                                            <button type="button" class="btn btn-primary waves-effect waves-light ">
                                                Update Terms Condition
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">

                                        List of Terms & Conditions
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
                                                            <th>Terms & Conditions For </th>
                                                            <th>Terms & Conditions</th>
                                                            <th>Status</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Customer App</td>
                                                            <td>

                                                                <a href="" data-toggle="modal" data-target="#add-modal">
                                                                    <div class="inbox-item-img"><img
                                                                            src="assets/images/list.png" class="" alt=""
                                                                            style="height: 45px;"></div>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle"
                                                                    data-on="Active" data-off="Deactive"
                                                                    data-onstyle="success" data-offstyle="danger"
                                                                    data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>

                                                            <td>Vendor App</td>
                                                            <td>

                                                                <a href="" data-toggle="modal" data-target="#add-modal">
                                                                    <div class="inbox-item-img"><img
                                                                            src="assets/images/list.png" class="" alt=""
                                                                            style="height: 45px;"></div>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle"
                                                                    data-on="Active" data-off="Deactive"
                                                                    data-onstyle="success" data-offstyle="danger"
                                                                    data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Driver App </td>
                                                            <td>

                                                                <a href="" data-toggle="modal" data-target="#add-modal">
                                                                    <div class="inbox-item-img"><img
                                                                            src="assets/images/list.png" class="" alt=""
                                                                            style="height: 45px;"></div>
                                                                </a>

                                                            </td>
                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle"
                                                                    data-on="Active" data-off="Deactive"
                                                                    data-onstyle="success" data-offstyle="danger"
                                                                    data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

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
                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->

            </div>
            <!-- end content -->

            <div id="add-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Terms and Conditions </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Terms and Conditions


                                            These terms and conditions ("Terms") govern the use of services made
                                            available on or through https://www.metroclap.in and/or the Metroclap mobile
                                            app (collectively, the "Platform, and together with the services made
                                            available on or through the Platform, the "Services"). These Terms also
                                            include our privacy policy, available at
                                            .</p>
                                    </div>

                                </div>



                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
            <?php include 'commonfiles/footer.php' ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
    $('.summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
    });
    </script>

</body>

</html>