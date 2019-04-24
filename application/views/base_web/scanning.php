<link type="image/png" sizes="16x16" href="<?php echo base_url();?>images/logo/logo.png">
<title>IPRO3D-Services</title>

<body background="<?php echo base_url();?>assets/images/background/error-bg.jpg">

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
   <?php
        foreach ($data as $d){
    ?>
    <a href="<?php echo base_url();?>index.php/welcome/#test" class="list-group-item">
          <b class="text font-weight-bold text-primary">Testimonial</b>
          <p class="text">" <?php echo $d->tcomment;?>... " Read more  </p>
      </a>
    <?php }?>


    </div>

 <div class="col-md-8 col-xlg-6">
      <div class="card">
          <div class="card-body" style="background-color:#F5F5F5;">
              <img src="<?php echo base_url();?>assets/images/slider/img5.jpg" height="400px" width="100%" align="center"><br><br>
              <h2 class="card-title" id="scanning" align="center" style="font-weight: bold;font-family: Philosiphers"><font color="black">2. 3D Scanning</font></h2>                          
              <p class="text font-normal;" style="text-align: justify;"><font color="black"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It is a contactless, non-destructive technology that helps digitally captures the surface shape of a physical object by using a line of laser light or by superimposing several images files in real time.3D scanners create cloud point of data from the surface of an object and collectively compiles the data to provide a 3d digital output in form of an STL file.<br></font>
              <div class="row">
                  <div class="col-md-4">
                      <img src="<?php echo base_url();?>assets/images/slider/img4.jpg"  height="200px" width="250px"/>
                      <div><br></div>
                  </div>
                  <div class="col-md-4">
                      <img src="<?php echo base_url();?>assets/images/slider/img1.jpg"  height="200px" width="250px"/>
                      <div><br></div>
                  </div>
                  <div class="col-md-4">
                      <img src="<?php echo base_url();?>assets/images/slider/img7.jpg"  height="200px" width="250px"/>
                      <div><br></div>
                  </div>
              </div>
              <p class="text font-normal;" style="text-align: justify;"></br><font color="black">3D scanning is also a way to capture a physical object with exact size and shape into digital file the computer can read data digitally from the 3D representation of the Object. </br></br>There are Different 3d scanners and 3d scanning techniques for different applications like industrial, novelty, architecture, reverse engineering, etc.</font></p> </br></br></p>
            </div>
        </div><br>
    </div>
    <div class="col-md-2 col-xlg-3">

        <a href="<?php echo base_url(); ?>index.php/welcome/view_blog" class="list-group-item">
        <b class="text font-weight-bold text-primary">Blog</b>
        <p class="text">iPRO3D blog read more..</p>
    </a>
        <br>

    </div>
</div>

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
</body>                
