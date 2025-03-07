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
                                        <li class="breadcrumb-item active">FAQ</li>
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
                                    <h3 class="card-title">FAQ</h3>
                                </div>
                                <div class="card-body">
                                <form id="faqForm">
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="faqFor" class="control-label">FAQ For:</label>
            <select class="form-control" id="faq_for" name="faqFor" required>
                <option value="">Select FAQ For</option>
                <option value="customer_app">Customer App</option>
                <option value="vendor_app">Vendor App</option>
                <option value="driver_app">Driver App</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="question" class="control-label">Question:</label>
            <input type="text" class="form-control" id="faq_question" name="question" placeholder="Enter your question" required>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="field-1" class="control-label">Answer:</label>
                <div class="summernote" id="faq_answer"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-primary waves-effect waves-light">Add FAQ</button>
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

                                        List of FAQ
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
                                                            <th>FAQ For </th>
                                                            <th>Question</th>
                                                            <th>Answer</th>
                                                            <th>Status</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Customer App</td>
                                                            <td>Who all I can refer?</td>
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
                                                            <td>
                                                                <a class="btn btn-info btn-sm" data-toggle="modal"
                                                                    data-target="#edit-modal">
                                                                    <i class="fa fa-edit text-light"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm sa-warning">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>

                                                            <td>Vendor App</td>
                                                            <td>What will the earn by referring? </td>
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
                                                            <td>
                                                                <a class="btn btn-info btn-sm" data-toggle="modal"
                                                                    data-target="#edit-modal">
                                                                    <i class="fa fa-edit text-light"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm sa-warning">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Driver App </td>
                                                            <td>What will the earn by referring? </td>

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
                                                            <td>
                                                                <a class="btn btn-info btn-sm" data-toggle="modal"
                                                                    data-target="#edit-modal">
                                                                    <i class="fa fa-edit text-light"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm sa-warning">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
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
                            <h5 class="modal-title">Answer </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Anyone who hasn't tried that service before. Or anyone who hasn't tried any
                                            Metroclap Company service before.

                                        </p>
                                    </div>

                                </div>



                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div id="edit-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update FAQ </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="row">
                                    <div class=" col-md-6  form-group">
                                        <label for="field-1" class="control-label">FAQ
                                            For :</label>
                                        <select class="form-control">
                                            <option selected>Select FAQ For</option>

                                            <option>Customer App</option>
                                            <option>Vendor App</option>
                                            <option>Driver App</option>
                                        </select>
                                    </div>
                                    <div class=" col-md-6  form-group">
                                        <label for="field-1" class="control-label">Question:</label>
                                        <input type="text" class="form-control" id="field-1" placeholder=" " required>
                                    </div>
                                    <div>
                                        <div class=" col-md-12  form-group">
                                            <label for="field-1" class="control-label">Answer :
                                            </label>
                                            <div class="summernote"></div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">
                                    Save Changes</button>
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
    $('.summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
    });
    </script>
  
   <script>
        (function(t) {
            "use strict";
            var e = function() {};
            e.prototype.init = function() {
                t(".sa-warning").click(function() {
                    Swal.fire({
                        title: "<table id='datatable' class='table table-striped table-bordered dt-responsive nowrap' style='border-collapse: collapse; border-spacing: 0; width: 100%;'>",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#348cd4",
                        cancelButtonColor: "#6c757d",
                        confirmButtonText: "Yes, delete it!"
                    }).then(function(result) {
                        if (result.isConfirmed) {
                            Swal.fire("Deleted!", "Your file has been deleted.", "success");
                        }
                    });
                });
            };
           
        })
    </script>


<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 150
    });

    $('#faqForm').submit(function(e) {
      e.preventDefault();

      var faq_for = $('#faq_for').val();
      var faq_question = $('#faq_question').val();
      var faq_answer = $('#faq_answer').summernote('code');  

      if (faq_for === '' || faq_question.trim() === '' || faq_answer.trim() === '') {
          alert('Please fill in all fields before submitting.');
          return;
      }

      var formData = {
          faq_for: faq_for,
          faq_question: faq_question,
          faq_answer: faq_answer,
      };

      $.ajax({
        url: "<?php echo base_url('add_faq'); ?>", 
        type: 'POST',
        data: formData,
        success: function(response) {
            if (response.status === 'success') {
                alert('FAQ added successfully!');
                $('#faq_for').val('');  
                $('#faq_question').val('');
                $('#faq_answer').summernote('code', '');
            } else {
                alert('Failed to add FAQ.');
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

</body>

</html>