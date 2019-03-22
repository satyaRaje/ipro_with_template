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
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
            <div class="row">

                <div class="row">
                    <div class="col-md-2 col-xlg-3">

                        <a href="#1" class="list-group-item">
                            <b class="text font-weight-bold text-danger">Email : hello@ipro3d.io
                                <br>
                                Mobile No. : 9821413663</b>
                        </a>
                        <br>
                        <a href="#1" class="list-group-item">
                            <b class="text font-weight-bold text-primary">Our Clients</b>
                            <p class="text">Ipro3d blog read more..</p>
                        </a>


                    </div>

                    <div class="col-md-8 col-xlg-6">

                        <div class="card">
                            <div class="card-body" style="background-color:#F5F5F5;"><br>
                            <h2 class="card-title" id="printing" align="center" style="font-weight: bold;font-family: Philosiphers">Mutation</h2>
                   
              <p class="text font-normal;" style="text-align: justify;">IPRO3D mutation program is for students to develop their creative ideas/products and prototype them using the hi-tech 3d printing technology. The mutation program helps students to fabricate their ideas to product and get expert help if needed by the students. Students can also discuss their problems with the 3d printing community forums and get help from people working in 3d printing, 3d designing, etc.</p>
              <p class="text font-normal;" style="text-align: justify;">Prototyping the innovative ideas and testing them in the real word are the basic need to the time. Being a student, it is not possible for them to get access individually to these hi-tech technologies to make a presentable prototype of their ideas but don’t you worry the mutation program helps students to get access to these hi-tech technologies and use it for prototyping their innovative and creative ideas.</p>
              <p class="text font-normal;" style="text-align: justify;">Students just have to do a free registration in mutation program and access to hi-tech 3d printing latest technology. </p>
              <p class="text font-normal;" style="text-align: justify;">Students registered in mutation program get special privileges of educational pricing and student discounts.</p>
              <br><br>
                             </div>

                        </div>

                  <div>

            </div>


    </div>

                    <div class="col-md-2 col-xlg-3">

                        <a href="#1" class="list-group-item">
                            <b class="text font-weight-bold text-primary">Blog</b>
                            <p class="text">Ipro3d blog read more..</p>
                        </a>
                        <br>

                    </div>
                </div>
<br><br>
                    
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
                    <p>Subscribe to our weekly Newsletter and stay tuned.</p>
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