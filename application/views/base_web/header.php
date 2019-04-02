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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- owl slider CSS -->
    <link href="<?php echo base_url()?>style/assets/owl.carousel/owl.carousel.min.css" rel="stylesheet">
    <link href='<?php echo base_url()."style/assets/owl.carousel/owl.theme.default.css"?>' rel="stylesheet">
    <!-- Custom CSS -->
    <link href='<?php echo base_url()."style/css/style.css"?>' rel="stylesheet">
    <!-- HTML5 Shim and R   espond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-85622565-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topheader font-bold" id="top">

        <div class="fix-width">
            <div class="row">
              <p class="text" >
                 <a href="https://www.facebook.com/ipro3d.tech"><button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fab fa-facebook"></i> </button></a>
              <a href=" https://twitter.com/ipro3d"><button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fab fa-twitter"></i> </button></a>
              <a href="https://www.linkedin.com/company/ipro3d-technologies-llp"><button class="btn btn-linkedin waves-effect btn-circle waves-light" type="button"> <i class="fab fa-linkedin"></i> </button></a>
              <a href="https://www.instagram.com/ipro3d"><button class="btn btn-instagram waves-effect btn-circle waves-light" type="button"> <i class="fab fa-instagram"></i> </button></a></p>
             
            <p class="font-weight-bold text-primary" style="text-align: right;margin-left: 58%">
                <i class="ti-email"> <b>Email: hello@ipro3d.io </b></i>
                <i class="ti-mobile" style="padding-left: 15px"><b>Mobile/Whatsapp: 9821413663</b></i> </p>
         </div>
            <nav class="navbar navbar-expand-md navbar-light p-l-0">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <!-- Logo will be here -->
                <a class="navbar-brand" href="index.html"><img src='<?php echo base_url()."images/logo/logo.png"?>' height="80px" width="200px" alt="admin template" /></a>
                <!-- This is the navigation menu -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto stylish-nav">
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/index">Home</a> </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#1">Overview</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#2">
                                    History</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#3"> Our Approaches</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#4">
                                    Our team</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#5 ">Company Ethics</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#6"> Authentic</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#7">Accuracy</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/About_us#8">
                                    Careers</a>
                                </div>
                         </li>
                        <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Printing#printing">3D Printing</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Scanning#scanning">3D Scanning</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Rapid#rapid">Rapid Prototyping</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Cad#cad">CAD Modeling</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Design#design ">Design for 3D Printing</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Reverse#reverse">Reverse Engineering</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Topology#topology">Design Topology Optimization</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Small#small">Small Batch Manufacturing</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Vaccum#vaccum">Vaccum Casting</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Xray#xray">X-Ray Topology</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Functional#functional">Functional Part Manufacturing</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Tooling#tooling">Tooling Manufacturing</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Injection#injection">Injection Modeling</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/Cnc#cnc">CNC Machining</a>         

                                 </div>
                            </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Shop</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/Mutation" >Mutation</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/Marketplace" target="_blank">Marketplace</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/Contact_us">Contact Us</a> </li>
                        <li class="nav-item"> <a class="m-t-5 btn btn-info font-13" href="<?php echo base_url(); ?>index.php/dynamic/Login/login/user_login_page" target="_blank" style="width:120px;">Login</a> </li>
                    </ul>
                </div>
            </nav>
        </div>
        </header>
    </div>

    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/waves.js"></script>
        <script src="<?php echo base_url(); ?>js/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/custom.min.js"></script>

</body>
</html>

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">


            <!-- ============================================================== -->
            <!-- Testimonial -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Call to action bar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
