<?php
            foreach ($data as $d){
            ?>

<div class="row light-blue" id="test">
    <div class="col-md-12">
        <div class="fix-width text-center">
            <h2 class="display-7">IPRO3D Technologies LPP.<br>Testimonials</h2>
            <div class="tesimonial-box owl-carousel owl-theme owl-loaded owl-drag" id="owl-demo2">
                <div class="owl-stage-outer">
                        <div class="owl-item cloned" style="width:100%;padding-right: 5%;padding-left: 5%">
                            <div class="item">
                                <p class="testimonial-text"><b class="font-500"><?php echo $d->tcomment;?></b> </p>
                                <div class="username"><b><?php echo $d->tname;?><br></b>
                                    <div class="designation"><?php echo $d->tdesignation;?><br>
                                    </div>
                                </div>
                            </div>
                        </div>          
                </div>               
            </div>
        </div>
    </div>
</div><br>
<?php }?>


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
