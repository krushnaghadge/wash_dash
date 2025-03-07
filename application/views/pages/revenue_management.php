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
                                <!-- <h4 class="page-title">Vendor Managemnt</h4> -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Revenue Management</li>
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
                                    <h3 class="card-title">Revenue Management</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                          <!-- Your Table -->
<table id="datatable" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Sr No</th>
            <th>Payment Date & Time</th>
            <th>Vender Name</th>
            <th>Amount</th>
            <th>Payment Mode</th>
            <th>Transaction ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data will be inserted here dynamically -->
    </tbody>
</table>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="edit-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Grade & Commission</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Select Grade</label>
                                                    <select class="form-control">
                                                        <option>Select Grade</option>

                                                        <option>Cheapest</option>
                                                        <option>Economical</option>
                                                        <option>Expensive</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Commission </label>
                                                    <div class="input-group">

                                                        <input type="text" name="" class="form-control" placeholder="">
                                                        <span class="input-group-prepend">
                                                            <button type="button" class="btn waves-effect waves-light btn-success">
                                                                <i class="fa fa-percent"></i> </button>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-info waves-effect waves-light">
                                            Edit</button>
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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
<!-- jQuery and AJAX script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
   
    var apiUrl = '/api/get_all_revenue';
   
    
    $.ajax({
      //  url: apiUrl,
      url: "<?php echo base_url('get_all_revenue'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if(response.status === "success") {
                var rows = '';
                $.each(response.data, function(index, payment) {
                    var srNo = index + 1;
                 
                    var paymentDateTime = payment.payment_created_at;
                 
                    var vendorName = "Vendor " + payment.payment_user_id;
                   
                    var amount = 'SAR ' + payment.payment_amount;
                    
                    var paymentMode = payment.payment_method ? payment.payment_method.toUpperCase() : 'N/A';
                   
                    var transactionId = payment.payment_id;
                   
                    var actionBtn = '<a href="#" class="ml-1 btn btn-danger btn-sm sa-warning" data-id="'+payment.payment_id+'"><i class="fa fa-trash"></i></a>';
                    
                    rows += '<tr>'+
                                '<td>'+ srNo +'</td>'+
                                '<td>'+ paymentDateTime +'</td>'+
                                '<td>'+ vendorName +'</td>'+
                                '<td>'+ amount +'</td>'+
                                '<td><span class="badge badge-success text-white">'+ paymentMode +'</span></td>'+
                                '<td>'+ transactionId +'</td>'+
                                '<td>'+ actionBtn +'</td>'+
                            '</tr>';
                });
                $('#datatable tbody').html(rows);
            } else {
                
                alert(response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error("Error fetching data: ", error);
        }
    });
});
</script>
    <?php include 'commonfiles/script.php' ?>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  
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