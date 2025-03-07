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
                                        <li class="breadcrumb-item active">Privacy Policy</li>
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
                                    <h3 class="card-title">Privacy Policy</h3>
                                </div>
                                <div class="card-body">
    <form id="privacy-policy-form">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-group">
                <label for="field-1" class="control-label">Privacy Policy For:</label>
                <select class="form-control" id="policy_for" name="policy_for">
                    <option selected>Select Privacy Policy For</option>
                    <option value="customer_app">Customer App</option>
                    <option value="vendor_app">Vendor App</option>
                    <option value="driver_app">Driver App</option>
                </select>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="field-1" class="control-label">Privacy Policy:</label>
                    <div class="summernote" id="policy_text"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <button type="button" class="btn btn-primary waves-effect waves-light" id="submit-policy">
                Add Privacy Policy
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

                                        List of Privacy Policy
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
                                                            <th>Privacy Policy For </th>
                                                            <th>Privacy Policy</th>
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
                                                 


                                                    </tbody>
                                                    <tfoot></tfoot>
                                                </table>
                                                <!-- <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="fa fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul> -->
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
                            <h5 class="modal-title">Privacy Policy </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Privacy Policy


                                            These Privacy Policy ("Terms") govern the use of services made
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
    $(document).ready(function() {
   
    $('#policy_text').summernote({
        height: 200, 
        placeholder: 'Enter your privacy policy here...',
    });

   
    $('#submit-policy').click(function() {
        
        var policy_for = $('#policy_for').val();
        var policy_text = $('#policy_text').summernote('code');  
     
        if (policy_for === 'Select Privacy Policy For' || policy_text === '') {
            alert('Please select the privacy policy type and provide the policy text.');
            return;
        }

        
        var formData = {
            policy_for: policy_for,
            policy_text: policy_text
        };


        $.ajax({
            url: "<?php echo base_url('add_privacy_policy'); ?>",
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    alert('Privacy Policy Added successfully.');
                    $('#policy_for').val('Select Privacy Policy For');  
                    $('#policy_text').summernote('code', ''); 
                } else {
                    alert('Failed to Add privacy policy.');
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
                alert('An error occurred. Please try again.');
            }
        });
    });
});

    </script>
    <script>
    $('.summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
    });
    </script>

</body>

</html>