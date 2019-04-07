
<div class="page-wrapper">
    <div class="row" style="margin:5px;">


        <?php foreach ($data as $d ){?>

            <div class="col-12">
                <div class="card">
                    <div class="card card-header" style="background-color: white;">
                        <div class="row">
                            <h2 class="text-danger font-weight-bold"><?php echo $d->pname; ?></h2>
                            <?php if($d->flag==100){ ?>

                                <form method="post"action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/upload_product_on_marketplace";?>' >
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <button type="submit" class=" btn btn-rounded btn-primary" style="margin-left: 80px;"> <i class="mdi mdi-briefcase-upload"></i>Push On Marketplace</button>
                                </form>
                            <?php } ?>
                            <?php if($d->flag==100){ ?>
                                <form method="post"action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/remove_product_on_marketplace";?>' >
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <button type="submit" class=" btn btn-rounded btn-danger" style="margin-left: 80px;"><i class="mdi mdi-briefcase-upload"></i>Approve </button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if($this->session->flag==0){?>
                        <div class="row pull-center">
                            <div class="col-md-2">
                                <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_front_view";?>'>
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <input type="hidden" name="pname" value='<?php echo $d->pname;?>'/>
                                    <h5 class="text font-weight-bold text-center">Front View</h5>
                                    <input type="file" name="userfile" class="form-control btn btn-file" required>
                                    <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_top_view";?>'>
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                    <h5 class="text font-weight-bold text-center">Top View</h5>
                                    <input type="file" name="userfile"  class="form-control btn btn-file" required>
                                    <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_bottom_view";?>'>
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                    <h5 class="text font-weight-bold text-center">Bottom View</h5>
                                    <input type="file" name="userfile" class="form-control btn btn-file" required>
                                    <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                                </form >
                            </div>
                            <div class="col-md-2">
                                <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_right_view";?>'>
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <input type="hidden" name="pname" value='<?php echo $d->pname;?>' >
                                    <h5 class="text font-weight-bold text-center">Right View</h5>
                                    <input type="file" name="userfile" class="form-control btn btn-file" required>
                                    <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_left_view";?>'>
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                    <h5 class="text font-weight-bold text-center">Left View</h5>
                                    <input type="file" name="userfile" class="form-control btn btn-file" required>
                                    <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_isometric_view";?>'>
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                    <h5 class="text font-weight-bold text-center">Isometric View</h5>
                                    <input type="file" name="userfile" class="form-control btn btn-file" required>
                                    <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                                </form>
                            </div>
                        </div>
                    <?php }?>
                    <div class="row">
                        <div class="col-md-2">
                            <?php
                            if($d->front_View!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->front_View; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->top_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->top_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->bottom_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->bottom_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            if($d->right_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->right_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->left_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->left_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            if($d->isomatric_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->isomatric_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card card-header" style="background-color: white;">
                        <div class="row">
                            <h2 class="text-danger font-weight-bold"><?php echo $d->pname; ?></h2>
                            <?php if($d->flag==100){ ?>

                                <form method="post"action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/upload_product_on_marketplace";?>' >
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <button type="submit" class=" btn btn-rounded btn-primary" style="margin-left: 80px;"> <i class="mdi mdi-briefcase-upload"></i>Push On Marketplace</button>
                                </form>
                            <?php } ?>
                            <?php if($d->flag==100){ ?>
                                <form method="post"action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/remove_product_on_marketplace";?>' >
                                    <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                    <button type="submit" class=" btn btn-rounded btn-danger" style="margin-left: 80px;"><i class="mdi mdi-briefcase-upload"></i>Approve </button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if($this->session->flag==0){?>
                    <div class="row pull-center">
                        <div class="col-md-2">
                            <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_front_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'/>
                                <h5 class="text font-weight-bold text-center">Front View</h5>
                                <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_top_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <h5 class="text font-weight-bold text-center">Top View</h5>
                                <input type="file" name="userfile"  class="form-control btn btn-file" required>
                                <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_bottom_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <h5 class="text font-weight-bold text-center">Bottom View</h5>
                                <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                            </form >
                        </div>
                        <div class="col-md-2">
                            <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_right_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>' >
                                <h5 class="text font-weight-bold text-center">Right View</h5>
                                <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_left_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <h5 class="text font-weight-bold text-center">Left View</h5>
                                <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form  method="post" enctype="multipart/form-data" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/upload_isometric_view";?>'>
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <input type="hidden" name="pname" value='<?php echo $d->pname;?>'>
                                <h5 class="text font-weight-bold text-center">Isometric View</h5>
                                <input type="file" name="userfile" class="form-control btn btn-file" required>
                                <button type="submit" class="btn-circle btn-info m-b-5 m-t-5" style="margin-left: 20%;"><i class="mdi mdi-briefcase-upload"></i></button>
                            </form>
                        </div>
                    </div>
                    <?php }?>
                    <div class="row">
                        <div class="col-md-2">
                            <?php
                            if($d->front_View!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->front_View; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->top_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->top_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->bottom_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->bottom_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            if($d->right_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->right_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->left_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->left_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            if($d->isomatric_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->pname."/".$d->isomatric_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>


        <?php } ?>

    </div>
