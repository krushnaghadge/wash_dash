<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <style>
    #notData {
        display: none;
        text-align: center;
    }

    .toggle-handle {
        background-color: aliceblue;
    }
    </style>
</head>

<body>

    <div id="wrapper">

        <?php include 'commonfiles/header.php' ?>

        <?php include 'commonfiles/sidebar.php' ?>

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo base_url('dashboard') ?>">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Create Invitation Code</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-lg-12">
                            <h5>Create Invitation Code</h5>

                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                            data-target="#add-modal">Generate Invitation Code</button>




                                    </h4>
                                    <div class="flex-shrink-0">

                                        <div class="d-flex align-items-center gap-2">

                                            <div class="search-box">
                                                <input type="search" class="form-control search-input form-control "
                                                    id=" searchMemberList" placeholder="Search here..."
                                                    data-table="table_list">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                 <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No</th>
                                                            <th>Invitation Code</th>

                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>

                                                            <td><strong><span
                                                                        class="text-success">INV320</span></strong>
                                                            </td>

                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle"
                                                                    data-on="Active" data-off="Deactive"
                                                                    data-onstyle="success" data-offstyle="danger"
                                                                    data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

                                                            </td>
                                                            <td>

                                                                <a
                                                                    href="#" class="btn btn-danger btn-sm sa-warning"><i
                                                                        class="fa fa-trash"></i></a>

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>2</td>
                                                            <td><strong><span
                                                                        class="text-success">INV875</span></strong>
                                                            </td>


                                                            <td>
                                                                <input type="checkbox" checked data-toggle="toggle"
                                                                    data-on="Active" data-off="Deactive"
                                                                    data-onstyle="success" data-offstyle="danger"
                                                                    data-size="mini">
                                                                <span class="toggle-handle btn btn-default"></span>

                                                            </td>
                                                            <td>

                                                                <a
                                                                    href="#" class="btn btn-danger btn-sm sa-warning"><i
                                                                        class="fa fa-trash"></i></a>

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

                    <div id="add-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Generate Invitation Code</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Generate Invitation
                                                        Code</label>
                                                    <div class="input-group">

                                                        <input class="form-control" id="coupon_code" type="text"
                                                            maxlength="8" placeholder="Enter Coupon Code"
                                                            name="coupon_code" value="" required="">
                                                        <button class="btn btn-sm btn-primary" type="button"
                                                            onclick="create_generateCouponCode()">Generate
                                                            Code</button>
                                                        <div class="invalid-feedback">Please Enter Invitation Code.
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary waves-effect"
                                        data-dismiss="modal">Close</button> -->
                                        <button type="submit" class="btn btn-info waves-effect waves-light">
                                            Add Invitation Code</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- End Page content -->
        </div>

        <div class="rightbar-overlay"></div>

        <?php include 'commonfiles/script.php' ?>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
        <script>
        $('.dropify').dropify();
        </script>
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
      
      
      
       <!-- DELETE MODAL -->
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
</body>

</html>