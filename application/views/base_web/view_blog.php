<title>IPRO3D-Enquiry</title>
<body>
<br>
<div class="preloader" style="display: none;">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
</div>
<div class="row" style="padding-right: 20%; padding-left: 20%;">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <?php
            foreach ($data as $d){
            ?>
                <div class="col-md-6 col-lg-12 col-xlg-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-3 text-center">
                                <a href="app-contact-detail.html"><button class="btn btn-circle btn-danger" ></button></a>
                            </div>
                            <div class="col-md-8 col-lg-9">
                                <h3 class="box-title m-b-0"><?php echo $d->title;?></h3> <small><?php echo $d->fname;?></small>
                                <p><?php echo $d->blog_cont;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

            </div>
        </div>
    </div>
</div>
</div>
<br>
</body>