<title>IPRO3D-Enquiry</title>
<body>
<br>
<div class="preloader" style="display: none;">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
</div>

            <?php
            foreach ($data as $d){
            ?>
    <div class="col-md-12  col-lg-12">

                <div class="row">
                   <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                        <div class="card card-body">
                            <div class="col-md-12 col-lg-12 text-center">
                            </div>
                            <div class="col-md-12 col-lg-12">
                                
                                <h3 class="box-title m-b-0"><?php echo $d->title;?></h3> <small><?php echo $d->fname;?></small>
                                <div class="col-md-4 col-lg-4" >
                                    <?php if($d->img1!=""){ ?>
                                    <img src="<?php echo base_url()."uploads/blog/".$d->img1;?>" height="150" width="350">
                                    <?php } ?>
                                </div>
                                <br>
                                   <p class="text font-weight-normal text-justify" style="width: 100%">
                                        <?php echo $d->blog_cont;?>
                                   </p>
                                <div class="row">

                                <div class="col-md-4 col-lg-4" >
                                    <?php if($d->img2!=""){ ?>
                                    <img src="<?php echo base_url()."uploads/blog/".$d->img2;?>" style="width: inherit;height: inherit">
                                    <?php }?>
                                    </div>
                                <div class="col-md-4 col-lg-4 m-l-10">
                                    <?php if($d->img3!=""){ ?>
                                    <img src="<?php echo base_url()."uploads/blog/".$d->img3;?>"  style="width: inherit;height: inherit"  >
                                    <?php }?>
                                    </div>
                                    <div class="col-md-4 col-lg-4" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                   </div>
                </div>
    </div>
                <br>
                <?php }?>
<br>


</body>