<html>
<head>
<title>3d Printing Service - Ipro3d Technologies LLP</title> 
<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>style/full/assets/owl.carousel/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>style/full/assets/owl.carousel/owl.theme.default.css" rel="stylesheet">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/favicon.png">
</head>
    
<body>
<div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
<div class="row" style="background-color: whitesmoke">
    <div class="col-md-3">
        <a href="#"><img src="<?php echo base_url();?>assets/images/slider/img4.jpg" height="550px" width="100%" style="opacity:0.9" /></a>
        <div class="carousel-caption d-md-block" align="center">
            <p style="font-weight: bold;font-size: 50px;font-family:" align="center"><font color="#E40B32">Get Quotation</font></p>
                <a type="button" class="btn btn-rounded btn-success" href="#" style="font-size:20px">Instant Quotation</a> <br><br>     
                             
        </div>
         
    </div>
    <div class="col-md-3">
        <a href="#"><img src="<?php echo base_url();?>assets/images/slider/img8.jpg" height="550px" width="100%" style="opacity:0.9"/></a>
        <div class="carousel-caption d-md-block" align="center">
            <p style="font-weight: bold;font-size: 50px" align="center"><font color="#E40B32">Idea to Design</font></p>             
                <a type="button" class="btn btn-rounded btn-success" href="#" style="font-size:20px">Design</a> <br><br>  
        </div>
    </div>
    <div class="col-md-3" >
        <a href="#"><img src="<?php echo base_url();?>assets/images/slider/img7.jpg" height="550px" width="100%" style="opacity:0.9"/></a>
        <div class="carousel-caption d-md-block" align="center">
            <br><br>
            <p style="font-weight: bold;font-size: 49px" align="center"><font color="#E40B32">Marketplace </font></p>    
                <a type="button" class="btn btn-rounded btn-success" href="#" style="font-size:20px">Start your Shop</a>  <br><br>      
                
        </div>
    </div>
    <div class="col-md-3">
        <a href="#"><img src="<?php echo base_url();?>assets/images/slider/img10.jpg" height="550px" width="100%" style="opacity:0.9"/></a>
        <div class="carousel-caption d-md-block" align="center">
            <br><br><br>
            <p style="font-weight: bold;font-size: 47px;" align="center"><font color="#E40B32">Manufacture your product</font></p>
            <a  type="button" class="btn btn-rounded btn-success" href="<?php echo base_url();?>index.php/dynamic/Login/login/user_login_page" style="font-size:20px">Manufacture</a>
                <br><br>        
                
                
        </div>
    </div>
</div>
  
<div style="background-color: #F5F5F5">
    <hr>
     <h2 class="font-weight-bold text-center" height="100%">Application</h2>
     <hr>
    <div class="row">
 <img src="<?php echo base_url();?>assets/images/Applications1.png" width="100%" height="100%">
</div>
<br>
</div>
 </div>
 <div style="background-color: #F5F5F5">
    <hr>
     <h2 class="font-weight-bold text-center" height="100%">How we Work</h2>
     <hr>
    <div class="row">
        <div class="col-md-6">
 <img src="<?php echo base_url();?>assets/images/work1.png" width="100%" height="100%">
</div>
<div class="col-md-6">
 <img src="<?php echo base_url();?>assets/images/work2.png" width="100%" height="100%">
</div>

</div>
<br>
</div>
 </div><br>
   



<div class="row light-blue" id="test">
    <div class="col-md-12">
        <div class="fix-width text-center">
            <h2 class="display-7">IPRO3D Technologies LLP.<br>Testimonials</h2>
            <div class="tesimonial-box owl-carousel owl-theme owl-loaded owl-drag" id="owl-demo2">
                <?php
                       foreach ($data as $d){
                    ?>
                <div class="owl-stage-outer">
                        <div class="owl-item cloned" style="width:100%;padding-right: 5%;padding-left: 5%">
                            <div class="item">
                                <p class="testimonial-text"><b class="font-500">" <?php echo $d->tcomment;?> "</b> </p>
                                <div class="username"><b><?php echo $d->tname;?><br></b>
                                    <div class="designation"><?php echo $d->tdesignation;?> , <?php echo $d->tcompany;?><br>
                                    </div>
                                </div>
                            </div>
                        </div>          
                </div> 
                <?php }?>
            </div>
    <br>


        <!--div class="owl-nav disabled">
            <div class="owl-prev">prev
            </div>
            <div class="owl-next">next
            </div>
        </div-->
        <div class="owl-dots">
            <div class="owl-dot"><span></span>
            </div>
            <div class="owl-dot active"><span></span>
            </div>
            <div class="owl-dot"><span></span>
            </div>
        </div>
    </div>
   </div>
</div>

        
      <div style="background-color: #F5F5F5">
    <hr>
     <h2 class="font-weight-bold text-center" height="100%">Prototype your Product</h2>
     <hr>
    <div class="row">
        <div class="col-md-6">
 <img src="<?php echo base_url();?>assets/images/Prototype1.png" width="100%" height="100%">
</div>
<div class="col-md-6">
 <img src="<?php echo base_url();?>assets/images/Prototype2.png" width="100%" height="100%">
</div>

</div>
<br>
</div>
 </div><br>
    <div style="background-color: whitesmoke">
    <hr>
     <h2 class=" font-weight-bold text-center">Statistics</h2>
     <hr>
        <div class="row">
        <div class="col-md-3">
            <h1 align="center"><b>8+</b></h1>
            <h3 align="center">Partners</h3>
        </div>
        <div class="col-md-3">
            <h1 align="center"><b>550+</b></h1>
            <h3 align="center">Parts Printed</h3>
        </div>
        <div class="col-md-3">
            <h1 align="center"><b>89+</b></h1>
            <h3 align="center">Happy Clients</h3>
        </div>
        <div class="col-md-3">
            <h1 align="center"><b>150+</b></h1>
            <h3 align="center">Meetings</h3>
        </div>
    </div>
</div>

    <div style="background-color: #F5F5F5">
    <hr>
    <h2 class=" font-weight-bold text-center">Our Clients</h2>
    <hr>
     <div class="row" align="center">
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/startup.png" style="height: 100px;width: 150px;background-color: #F5F5F5;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/make.jpg" style="height: 100px;width: 150px;background-color: #F5F5F5;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/ikea.png" style="height: 100px;width: 150px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/cc.png"  style="height: 100px;width: 150px;">
        </div>
    </div>
    <br>

    <div class="row" align="center">
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/blue.png" style="height: 100px;width: 150px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/paytm.png" style="height: 100px;width: 150px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/savera.png"  style="height: 100px;width: 150px;">
        </div>
        <div class="col-md-3">
            <img src="<?php echo base_url(); ?>assets/images/clients/sbi.png" style="height: 100px;width: 150px;">
        </div>
    </div>
    <br>
    </div>
    <br>
<hr>
    <div class="container">
        <div class="row" align="center">
            <div class="col-md-3" >
            </div>
            <div class="col-md-6" >
                <div class="thumbnail center well well-sm text-center">
                    <h2>Newsletter</h2> 
                    <p>Subscribe to our Newsletter and stay tuned.</p>
                    <form action="" method="post" role="form">
                        <div class="input-group">
                          <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                          </span>
                          <input class="form-control" type="text" id="" name="" placeholder="your@email.com">
                        </div><br>
                        <input type="submit" value="Subscribe" class="btn btn-large btn-primary" />
                  </form>
                </div>    
            </div>
        </div><br>
    </div>

<script src="<?php echo base_url()."style/full/assets/plugins/jquery/jquery.min.js";?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url()."style/full/assets/plugins/popper/popper.min.js";?>"></script>
<script src="<?php echo base_url()."style/full/assets/plugins/bootstrap/js/bootstrap.min.js";?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url()."style/full/js/jquery.slimscroll.js"?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url()."style/full/js/waves.js"?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url()."style/full/js/sidebarmenu.js"?>"></script>
<!--stickey kit -->
<script src="<?php echo base_url()."style/full/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js";?>"></script>
<script src="<?php echo base_url()."style/full/assets/plugins/sparkline/jquery.sparkline.min.js"?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url()."style/full/js/custom.min.js"?>"></script>
<script src="<?php echo base_url();?>style/full/assets/owl.carousel/owl.carousel.min.js"></script>
<script>
    // This isfor the sticky sidebar
    $(".stickyside").stick_in_parent({
        offset_top: 100
    });
    $('.stickyside a').click(function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, 500);
        return false;
    });
    // This is auto select left sidebar
    // Cache selectors
    // Cache selectors
    var lastId,
        topMenu = $(".stickyside"),
        topMenuHeight = topMenu.outerHeight(),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // Bind click handler to menu items


    // Bind to scroll
    $(window).scroll(function() {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight - 250;

        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .removeClass("active")
                .filter("[href='#" + id + "']").addClass("active");
        }
    });
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


     </body>
     </html>