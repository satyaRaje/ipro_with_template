<footer class="footer">
    All rights are deserved at IPRO3D Technologies LLP.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
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
<script src='<?php echo base_url()."style/full/assets/plugins/jquery/jquery.min.js";?>'></script>
<!-- Bootstrap tether Core JavaScript -->
<script src='<?php echo base_url()."style/full/assets/plugins/popper/popper.min.js";?>'></script>
<script src='<?php echo base_url()."style/full/assets/plugins/bootstrap/js/bootstrap.min.js";?>'></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src='<?php echo base_url()."style/full/js/jquery.slimscroll.js";?>'></script>
<!--Wave Effects -->
<script src=<?php echo base_url()."style/full/js/waves.js" ?>'></script>
<!--Menu sidebar -->
<script src='<?php echo base_url()."style/full/js/sidebarmenu.js";?>'></script>
<!--stickey kit -->
<script src='<?php echo base_url()."style/full/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js";?>'></script>
<script src='<?php echo base_url()."style/full/assets/plugins/sparkline/jquery.sparkline.min.js";?>'></script>
<!--Custom JavaScript -->
<script src='<?php echo base_url()."style/full/js/custom.min.js";?>'></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src='<?php echo base_url()."style/full/assets/plugins/styleswitcher/jQuery.style.switcher.js";?>'></script>

<script src='<?php echo base_url()."style/assets/plugins/summernote/dist/summernote-bs4.min.js"?>'></script>
<script>
    $(function () {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function () {
        $(".click2edit").summernote()
    },
        window.save = function () {
            $(".click2edit").summernote('destroy');
        }
</script>
</body>

</html>