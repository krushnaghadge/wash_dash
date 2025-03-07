<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <style>
        .card-header {
            background-color: #fafafa;
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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Profile Managemnt</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-default card-fill">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">Personal Information</h3>
                                </div> -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </div>
                                    <div class="about-info-p row">
                                        <div class="col-md-3">
                                            <strong> Name</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted"> John Deo</p>
                                        </div>
                                    </div>
                                    <div class="about-info-p row">
                                        <div class="col-md-3">
                                            <strong>Mob No</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted">(123) 123 1234</p>
                                        </div>
                                    </div>
                                    <div class="about-info-p row">
                                        <div class="col-md-3">
                                            <strong>Email</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted">johnathandeon @moltran.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs tabs-bordered" role="tablist">
                                        <li class="nav-item tab">
                                            <a class="nav-link active" id="about-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="about" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                                                <span class="d-none d-sm-block">Profile Update</span>
                                            </a>
                                        </li>
                                        <li class="nav-item tab">
                                            <a class="nav-link" id="activities-tab" data-toggle="tab" href="#change_password" role="tab" aria-controls="activities" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                                <span class="d-none d-sm-block">Change Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content profile-tab-content">
                                        <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="about-tab">
                                            <form class="form-horizontal">
                                                <div class="form-group mb-3">
                                                    <label class="control-label" for="example-input1-group2">Full Name</label>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-user"></i></button>
                                                            </span>
                                                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Enter Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="control-label" for="example-input1-group2">Mobile Number</label>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary">
                                                                    <i class="fa fa-phone"></i>
                                                                </button>
                                                            </span>
                                                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Enter Mobile Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="control-label" for="example-input1-group2">Email ID</label>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary">
                                                                    <i class="fa fa-envelope"></i>
                                                                </button>
                                                            </span>
                                                            <input type="number" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Enter Email ID">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="control-label" for="example-input1-group2">Mobile Number</label>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary">
                                                                    <i class="fa fa-file"></i>
                                                                </button>
                                                            </span>
                                                            <input type="file" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Enter Mobile Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-info">Update</button>
                                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane" id="change_password" aria-labelledby="activities-tab">
                                            <form class="form-horizontal">
                                                <div class="form-group mb-3">
                                                    <label class="control-label" for="example-input1-group2">Current Password</label>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-lock"></i></button>
                                                            </span>
                                                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="control-label" for="example-input1-group2">New Password</label>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary">
                                                                    <i class="fa fa-lock"></i>
                                                                </button>
                                                            </span>
                                                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="control-label" for="example-input1-group2">Confirm Password</label>
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary">
                                                                    <i class="fa fa-lock"></i>
                                                                </button>
                                                            </span>
                                                            <input type="number" id="example-input1-group2" name="example-input1-group2" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-info">Save Changes</button>
                                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </form>
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

</body>

</html>