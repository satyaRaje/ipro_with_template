<html>

<body class="fix-header fix-sidebar card-no-border">
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
                <div class="col-lg-3 col-xlg-2 col-md-4">
                    <div class="stickyside">
                        <div class="list-group" id="top-menu">
                            <a href="#1" class="list-group-item active">Mutation</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xlg-10 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" id="1">Mutation</h4>
            <p>IPRO3D mutation program is for students to develop their creative ideas/products and prototype them using the hi-tech 3d printing technology. The mutation program helps students to fabricate their ideas to product and get expert help if needed by the students. Students can also discuss their problems with the 3d printing community forums and get help from people working in 3d printing, 3d designing, etc.</p>
                       </div>

                    </div>
                <div>
            </div>
    </div>

                    
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
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