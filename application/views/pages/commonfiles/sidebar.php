    <div class="left-side-menu">
        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <div class="user-box">

                    <div class="float-left">
                        <img src="<?php echo base_url() ?>assets/images/users/avatar-1.jpg" alt=""
                            class="avatar-md rounded-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                John Doe
                            </a>

                        </div>
                        <p class="font-13 text-white m-0">Administrator</p>
                    </div>
                </div>

                <ul class="metismenu" id="side-menu">

                    <li>
                        <a href="<?php echo base_url('dashboard') ?>" class="waves-effect">
                            <i class="mdi mdi-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <!-- <div class="menu-item pt-3 mr-3 ml-4">
                        <div class="menu-content">
                            <span class="menu-heading fw-bold mt-3 text-uppercase fs-7" style="font-size: 11px;
    color: antiquewhite;">User Management</span>
                        </div>
                    </div> -->
                    <li>
                        <a href="<?php echo base_url('user_management') ?>" class="waves-effect">
                            <i class="fa fa-users"></i>
                            <span> User Management </span>
                        </a>
                    </li>



                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fa fa-pen"></i>
                            <span> Vendor Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('vendor_management') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Manage Vendor
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('vendor_commision') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Manage Commision
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('commision_agreement') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Commision Agreement
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fa fa-pen"></i>
                            <span> Driver Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('driver_management') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Manage Driver
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('create_invitation_code') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Create Invitation Code
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('driver_charges') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Driver Charges
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fa fa-pen"></i>
                            <span> Order Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('new_order') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    New Orders
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('ongoing_orders') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    In-process Orders
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('ready_to_delivered') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Ready to Delivered
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('completed_orders') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Completed Orders
                                </a>
                            </li>

                        </ul>
                    </li>
                  
                   <li>
                        <a href="<?php echo base_url('revenue_management') ?>" class="waves-effect">
                            <i class="fas fa-rupee-sign"></i>
                            <span>Revenue Management </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('manage_points') ?>" class="waves-effect">
                            <i class="fas fa-rupee-sign"></i>
                            <span>Manage Point System </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('auto_rating') ?>" class="waves-effect">
                            <i class="fas fa-rupee-sign"></i>
                            <span>Auto Rating System </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('ratings') ?>" class="waves-effect">
                            <i class="fas fa-wallet"></i>
                            <span>Review & Ratings </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fa fa-pen"></i>
                            <span> Wallet Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('manage_wallet') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    User Wallet
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('vendor_wallet') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Vendor Wallet
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('driver_wallet') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Driver Wallet
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fa fa-pen"></i>
                            <span> Offers </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('coupon_code') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Coupon Code
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('promo_code') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Exclusive Promo Code
                                </a>
                            </li>


                        </ul>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url('coupon_code') ?>" class="waves-effect">
                            <i class="fas fa-wallet"></i>
                            <span>Notifications </span>
                        </a>
                    </li> -->

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fa fa-pen"></i>
                            <span> Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('add_service_type') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Main services
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('services') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Sub Services
                                </a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo base_url('sub_services') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Sub Services
                                </a>
                            </li> -->
                           <!-- <li>
                                <a href="<?php echo base_url('manage_language') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Manage Language
                                </a>
                            </li>-->
                            <li>
                                <a href="<?php echo base_url('add_state') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Add State
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('add_city') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Add City
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('add_vehicle_type') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Manage Vehicle
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fa fa-pen"></i>
                            <span> App Content </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('privacy_policy') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('terms_condition') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Terms Condition
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('faq') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('support_center') ?>">
                                    <i class="fa fa-minus" style="margin-right: 4px;"></i>
                                    Support Center
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
    </div>