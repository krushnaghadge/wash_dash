<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
    <style>
    .background-image {
        background-image: url('assets/images/bg.png');
        background-size: cover;
        /* Ensures the image covers the entire container */
        background-position: center;
        /* Centers the image in the container */
        background-repeat: no-repeat;
        /* Prevents the image from repeating */
        width: 100%;
        height: 100vh;
        /* Full height of the viewport */
        padding: 20px;
        /* Adds padding to the container */
        box-sizing: border-box;
        /* Ensures padding is included in the width and height */
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        /* Text color for better visibility */
        text-align: center;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        overflow: auto;
        opacity: 0.8;
    }

    .card {
        background-color: #000232;
        box-shadow: 0px 10px 34px 14px rgb(0 0 0 / 72%);
    }

    label {
        color: #fff;
    }

    .login-wrap .img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto;
        margin-bottom: 20px;
        background-color: #fff;
    }

    .custom-control {
        text-align: justify;
    }

    .login_btn {
        width: 100%;
    }
    </style>
</head>

<body class="authentication-page">
    <div class="account-pages background-image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mt-4">
                        <!-- <div class="card-header p-5 position-relative">
                            <img src="<?php echo base_url() ?>assets/images/logo-laundary.svg" alt="">
                        </div> -->
                        <div class="card-body p-4 mt-2">
                            <form action="#" class="p-3">

                                <div class="form-group mb-4 login-wrap">
                                    <img class="img" src="<?php echo base_url() ?>assets/images/washdash.png" alt="">
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" type="email" required="" placeholder="Enter Email ID">
                                </div>

                                <div class="form-group text-center mt-5 mb-4">
                                    <a class="btn btn-primary login_btn" type="submit"
                                        href="<?php echo base_url('dashboard') ?>">Reset </a>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-sm-7">
                                        <a class="text-white" href="<?php echo base_url('login') ?>">Back To Login ?</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>

    <?php include 'commonfiles/script.php' ?>

</body>

</html>