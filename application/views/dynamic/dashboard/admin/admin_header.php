<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href='<?php echo base_url()."style/assets/images/favicon.png";?>'>
    <title>IPRO3D Marketplace-Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href='<?php echo base_url()."style/full/assets/plugins/bootstrap/css/bootstrap.min.css";?>' rel="stylesheet">
    <!-- Custom CSS -->
    <link href='<?php echo base_url()."style/full/css/style.css";?>' rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href='<?php echo base_url()."style/full/css/colors/default-dark.css";?>' id="theme" rel="stylesheet">

    <link href='<?php echo base_url()."style/assets/plugins/summernote/dist/summernote-bs4.css"?>' rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!--<img src='<?php echo base_url()."style/assets/images/logo-icon.png";?>' alt="homepage" class="dark-logo" /> -->
                        <!-- Light Logo icon -->
                        <!--<img src='<?php echo base_url()."style/assets/images/logo-light-icon.png";?>' alt="homepage" class="light-logo" /> -->
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                         <!-- dark Logo text -->

                        <img src="http://localhost/ipro_with_template/images/logo/logo.png" height="80px" width="200px" alt="admin template">
                         <!--img src='<?php echo base_url()."style/assets/images/logo-text.png";?>' alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <!--img src='<?php echo base_url()."style/assets/images/logo-light-text.png";?>' class="light-logo" alt="homepage" /--></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src='<?php echo base_url()."style/assets/images/users/1.jpg"; ?>' alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?php echo base_url()?>style/full/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?php echo base_url()?>style/full/assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src='<?php echo base_url()."style/full/assets/images/users/1.jpg"; ?>' alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src='<?php echo base_url()."style/full/assets/images/users/1.jpg"; ?>' alt="user"></div>
                                        <div class="u-text">
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-wallet"></i> <?php echo $this->session->email;?></a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/Welcome/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Language -->
                    <!-- ============================================================== -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

<aside class="left-sidebar nabbar-light" style="background-color: white; overflow: visible;width: 270px " >
            <!-- Sidebar scroll-->
            <div class="slimScrollDiv" style="position: relative; overflow: visible; width: auto; height: 100%;"><div class="scroll-sidebar" style=" width: auto; height: 100%;">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                                   <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav active " style="background-color: white;">
                    <ul id="sidebarnav" >
                     
                        <li class=""> <a href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span >Dashboard </span></a>
                        </li>
                        <li> <a class="x" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span >Product</span></a>
                        <ul aria-expanded="false" class="collapse" style="height: 262px;">

                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/upload_admin_product">Upload Product</a>


                            <li>
                                <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/select_view_pending">Pending For Review</a>
                            </li>
                            <li>
                                <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/select_view_upload">View Product</a>
                            </li>
                        <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/select_view_upload">View Product</a>
                        </li>
                        <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/select_product_on_marketplace">Marketplace Product</a>
                        </li>
                        </ul></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">View</span></a>
                              <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/view_stl">View STL File</a>
                        </li>
                        <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/select_view_upload">View Quotation</a>
                        </li>
                          <li>
                            <a href="<?php echo base_url()."/index.php/dynamic/enquiry/enquiry/select_enquiry";?>">View Enquiry</a>
                        </li>
                          <li>
                            <a href="<?php echo base_url()."/index.php/dynamic/enquiry/enquiry/select_contact";?>">View Contact</a>
                        </li>
                         </ul>

                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">History</span></a>
                             <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/upload_admin_product">Sale History</a>
                        </li>
                         <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/upload_admin_product">Payment History</a>
                        </li>
                        <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/upload_admin_product">Product History</a>
                        </li>
                    </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Add</span></a>
                            <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url()."index.php/dynamic/blog/Ci_blog/load_admin_blog";?>">Add Blog</a>
                        </li>
                       <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/view_news">Add Newsletter</a>
                        </li>
                       <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/upload_admin_product">Add New Admin</a>
                        </li>
                    </ul>

                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Customer</span></a>
                            <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/upload_admin_product">Customer Contact</a>
                        </li>
                       <li>
                            <a href="http://localhost/ipro_with_template/index.php/dynamic/product/ci_upload_product/upload_admin_product">Customer Data</a>
                        </li>
                       </ul>
                </li>
                 <li>
                    <a href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Discount</span></a>
                </li>
                 <li>
                    <a  href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Generate Coupon</span></a>
                </li>

                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; left: 1px; height: 2994.78px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div></div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <!-- End Bottom points-->
        </aside>