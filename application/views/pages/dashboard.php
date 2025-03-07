<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'commonfiles/link.php' ?>
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
                                <h4 class="page-title">Welcome to Admin !</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4 ">
                            <a href="<?php echo base_url('user_management')?>">
                                <div
                                    class="card rounded-4 bg-gradient-rainbow bubble position-relative overflow-hidden ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                                <h4 class="mb-0 text-white">17</h4>
                                                <p class="mb-0 text-white">Total Customer</p>
                                            </div>
                                            <div class="fs-9 text-white">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-4 ">
                            <a href="<?php echo base_url('vendor_management')?>">

                                <div
                                    class="card rounded-4 bg-gradient-cosmic bubble position-relative overflow-hidden ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                                <h4 class="mb-0 text-white">7</h4>
                                                <p class="mb-0 text-white">Total Vendors</p>
                                            </div>
                                            <div class="fs-9 text-white">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-4 ">
                            <a href="<?php echo base_url('driver_management')?>">

                                <div
                                    class="card rounded-4 bg-gradient-moonlit bubble position-relative overflow-hidden ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                                <h4 class="mb-0 text-white">7</h4>
                                                <p class="mb-0 text-white">Total Driver</p>
                                            </div>
                                            <div class="fs-9 text-white">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-4 ">
                            <div class="card rounded-4 bg-gradient-burning bubble position-relative overflow-hidden ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-0">
                                        <div class="">
                                            <h4 class="mb-0 text-white">SAR 700</h4>
                                            <p class="mb-0 text-white">Revenue</p>
                                        </div>
                                        <div class="fs-9 text-white">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card-box">
                                <div class="media">
                                    <div class="avatar-md bg-info rounded-circle mr-2">
                                        <i class="ion-md-cart avatar-title font-26 text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-right">
                                            <h4 class="my-0 font-weight-bold"><span data-plugin="counterup">15</span>
                                            </h4>
                                            <p class="mb-0 mt-1 text-truncate">New Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box">
                                <div class="media">
                                    <div class="avatar-md bg-purple rounded-circle">
                                        <i class="ion-md-cart avatar-title font-26 text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-right">
                                            <h4 class="my-0 font-weight-bold"><span data-plugin="counterup">9</span>
                                            </h4>
                                            <p class="mb-0 mt-1 text-truncate">In-Process Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box">
                                <div class="media">
                                    <div class="avatar-md bg-success rounded-circle">
                                        <i class="ion-md-cart avatar-title font-26 text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-right">
                                            <h4 class="my-0 font-weight-bold"><span data-plugin="counterup">5</span>
                                            </h4>
                                            <p class="mb-0 mt-1 text-truncate">Ready to Delivered </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card-box">
                                <div class="media">
                                    <div class="avatar-md bg-primary rounded-circle">
                                        <i class="ion-md-cart avatar-title font-26 text-white"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="text-right">
                                            <h4 class="my-0 font-weight-bold"><span data-plugin="counterup">14</span>
                                            </h4>
                                            <p class="mb-0 mt-1 text-truncate">Completed Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                    </div>
                  
                  
                
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Orders</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Customer Name</th>
                                                            <th>Amount</th>
                                                            <th>Order Status</th>
                                                            <th>View</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>#2334</td>
                                                            <td>Jay Belkar<br>
                                                                <small>10 Jul 2024 05:30 am</small>
                                                            </td>
                                                            <td>SAR 200</td>
                                                            <td><span class="text-danger"> Pending</span></td>
                                                            <td>
                                                                <a href="<?php echo base_url('new_order')?>"><i
                                                                        class="fa fa-arrow-right"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#5432</td>
                                                            <td>Demo user1<br>
                                                                <small>10 Jul 2024 05:30 am</small>
                                                            </td>
                                                            <td>SAR 100</td>
                                                            <td><span class="text-danger"> Pending</span></td>
                                                            <td>
                                                                <a href="<?php echo base_url('new_order')?>"><i
                                                                        class="fa fa-arrow-right"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#7654</td>
                                                            <td>Demo User2<br>
                                                                <small>10 Jul 2024 05:30 am</small>
                                                            </td>
                                                            <td>SAR 110</td>
                                                            <td><span class="text-danger"> Pending</span></td>
                                                            <td>
                                                                <a href="<?php echo base_url('new_order')?>"><i
                                                                        class="fa fa-arrow-right"
                                                                        aria-hidden="true"></i>
                                                                </a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">


                                    <div class="" id="chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">


                                    <div class="" id="chart1"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Total Order & Revenue
                                    </h4>
                                    <div class="">
                                        <ul class="nav nav-tabs grab_d tabs-bordered" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-b1-tab" data-toggle="tab" href="#home-b1"
                                                    role="tab" aria-controls="home-b1" aria-selected="false">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-home-variant-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">Today</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-b1-tab" data-toggle="tab"
                                                    href="#profile-b1" role="tab" aria-controls="profile-b1"
                                                    aria-selected="false">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-account-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">This Week</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="message-b1-tab" data-toggle="tab"
                                                    href="#message-b1" role="tab" aria-controls="message-b1"
                                                    aria-selected="false">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-email-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">This Month</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="setting-b1-tab" data-toggle="tab"
                                                    href="#setting-b1" role="tab" aria-controls="setting-b1"
                                                    aria-selected="true">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-settings-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">This Year</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="home-b1" role="tabpanel"
                                                aria-labelledby="home-b1-tab">
                                                <div class="" id="chart_today"></div>

                                            </div>
                                            <div class="tab-pane show" id="profile-b1" role="tabpanel"
                                                aria-labelledby="profile-b1-tab">
                                                <div class="" id="chart_week"></div>

                                            </div>
                                            <div class="tab-pane" id="message-b1" role="tabpanel"
                                                aria-labelledby="message-b1-tab">
                                                <div class="" id="chart_month"></div>

                                            </div>
                                            <div class="tab-pane active" id="setting-b1" role="tabpanel"
                                                aria-labelledby="setting-b1-tab">
                                                <div class="" id="chart_year"></div>

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

            <!-- Footer Start -->
            <?php include 'commonfiles/footer.php' ?>
            <!-- end Footer -->

        </div>

        <!-- End Page content -->

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'commonfiles/script.php' ?>
    <script src="https://unpkg.com/apexcharts/dist/apexcharts.min.js"></script>

    <script>
    var options = {
        series: [44, 55, 41, 17],
        labels: ['New Order', 'In-process Order', 'Ready to Delivered', 'Completed Order'],

        chart: {
            type: 'donut',
            width: 350, // set the width of the chart
            height: 350 // set the height of the chart
        },
        title: {
            text: 'Total Orders :SAR 400',
            align: 'center',
            style: {
                fontSize: '15px',
                fontWeight: 'bold'
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 400
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    var options = {
        series: [44, 55, 41, 17],
        labels: ['New Order', 'In-process Order', 'Ready to Delivered', 'Completed Order'],
        chart: {
            type: 'donut',
            width: 350, // set the width of the chart
            height: 350 // set the height of the chart
        },
        title: {
            text: 'Todays Orders :SAR 400',
            align: 'center',
            style: {
                fontSize: '15px',
                fontWeight: 'bold'
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
    //reveune manage (Yearly)
    var options = {
        series: [{
            name: 'Net Profit',
            data: [22, 44, 55, 57, 56, 61, 58, 63, 60, 66, 77, 88]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        colors: ['#2490d4'], // Set the color for all bars

        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '15%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
            title: {
                text: 'SAR'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        },
        title: {
            text: 'Yearly  Revenue :SAR 400',
            align: 'center',
            style: {
                fontSize: '15px',
                fontWeight: 'bold'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart_year"), options);
    chart.render();

    //reveune manage (monthly)
    var options = {
        series: [{
            name: 'Net Profit',
            data: [22, 44, 55, 57, 56, 61, 58, 63, 60, 66, 77, 88, 22, 44, 55, 57, 56, 61, 58, 63, 60, 66,
                77, 88, 22, 44, 55, 57, 56, 61, 58
            ]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        colors: ['#2490d4'], // Set the color for all bars

        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '15%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10",
                "11", "12", "13", "14", "15", "16", "17", "18", "19",
                "20", "21", "22", "23", "24", "25", "26", "27", "28",
                "29", "30", "31"
            ],
        },
        yaxis: {
            title: {
                text: 'SAR'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        },
        title: {
            text: 'Monthly  Revenue :SAR 400',
            align: 'center',
            style: {
                fontSize: '15px',
                fontWeight: 'bold'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart_month"), options);
    chart.render();

    //reveune manage (week)
    var options = {
        series: [{
            name: 'Net Profit',
            data: [52, 44, 15, 57, 53, 21, 58]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        colors: ['#2490d4'], // Set the color for all bars

        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '15%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ["Mon", "Tue", "wed", "Thur", "Fri", "Sat", "Sun"],
        },
        yaxis: {
            title: {
                text: 'SAR'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        },
        title: {
            text: 'Weekly  Revenue :SAR 400',
            align: 'center',
            style: {
                fontSize: '15px',
                fontWeight: 'bold'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart_week"), options);
    chart.render();

    //reveune manage (today)
    var options = {
        series: [{
            name: 'Net Profit',
            data: [22]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        colors: ['#2490d4'], // Set the color for all bars

        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '15%',
                endingShape: 'rounded'
            },
        },

        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['7-11-2024'],
        },
        yaxis: {
            title: {
                text: 'SAR'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        },
        title: {
            text: 'Todays  Revenue :SAR 400',
            align: 'center',
            style: {
                fontSize: '15px',
                fontWeight: 'bold'
            }
        }

    };

    var chart = new ApexCharts(document.querySelector("#chart_today"), options);
    chart.render();
    </script>
  
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            toastr.success('Successfully!', '', {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            });
        });
    </script>
  


</body>

</html>