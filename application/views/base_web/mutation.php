<html>
<title>IPRO3D-Mutation</title>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->

                <div class="row" align="center">
                    <div class="col-md-2 col-xlg-3">

                      <a href="<?php echo base_url(); ?>index.php/welcome/Contact_us" class="list-group-item">
         <h6 class="text font-normal m-l-10" align="left">
                             <b>Address </b><br><br> 
                            C/O Er. Yogesh Pawar,<br>
                            Meridian Status-B, F-7,<br>
                            Near Youth Hostel, Kesarsingpura,<br>
                            Aurangabad-431005, Maharashtra,<br>
                            India.
                            </h6>
                             <br>
        </a>
        <a href="<?php echo base_url(); ?>index.php/welcome/Contact_us" class="list-group-item">                    
        <font color="Grey">
            <p class="text font-weight-bold">Email : hello@ipro3d.io</p>
            <p class="text font-weight-bold" style="font-size: 15px">Mobile No. :9821413663</p>            
            <a href="<?php echo base_url(); ?>index.php/welcome/Contact_us" class="list-group-item"><button class="btn-primary" align="right"> Contact Us</button></a>
            </font>
            <br>
    </a>
    <br>
    <a href="<?php echo base_url();?>index.php/welcome/#test" class="list-group-item">
          <b class="text font-weight-bold text-primary">Testimonial</b>
          <p class="text">Ipro3d Testimonials read more..</p>
      </a>
    </div>

                    <div class="col-md-8 col-xlg-6">

                        <div class="card">
                            <div class="card-body" style="background-color:#F5F5F5;"><br>
                            <h2 class="card-title" id="printing" align="center" style="font-weight: bold;font-family: Philosiphers"><font color="black">Mutation</h2></font>
                   
              <p class="text font-normal;" style="text-align: justify;"><font color="black">IPRO3D mutation program is for students to develop their creative ideas/products and prototype them using the hi-tech 3d printing technology. The mutation program helps students to fabricate their ideas to product and get expert help if needed by the students. Students can also discuss their problems with the 3d printing community forums and get help from people working in 3d printing, 3d designing, etc.</p></font>
              <p class="text font-normal;" style="text-align: justify;"><font color="black">Prototyping the innovative ideas and testing them in the real word are the basic need to the time. Being a student, it is not possible for them to get access individually to these hi-tech technologies to make a presentable prototype of their ideas but don’t you worry the mutation program helps students to get access to these hi-tech technologies and use it for prototyping their innovative and creative ideas.</p></font>
              <p class="text font-normal;" style="text-align: justify;"><font color="black">Students just have to do a free registration in mutation program and access to hi-tech 3d printing latest technology. </p></font>
              <p class="text font-normal;" style="text-align: justify;"><font color="black">Students registered in mutation program get special privileges of educational pricing and student discounts.</p><a href="<?php echo base_url(); ?>index.php/welcome/mutation_form"> click here for registration</a></font>
              <br><br>
          
                             </div>
                        </div>
                  <div>
            </div>
    </div>

                    <div class="col-md-2 col-xlg-3">
                        <a href="<?php echo base_url(); ?>index.php/welcome/view_blog" class="list-group-item">
        <b class="text font-weight-bold text-primary">Blog</b>
        <p class="text">iPRO3D blog read more..</p>
    </a>
                        <br>

                    </div>
                </div><br>                  
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div><br>
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
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
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
<script>
    // This is for the sticky sidebar
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