
<div class="page-wrapper">
    <div class="row" style="margin:5px;">


        <?php

         //var_dump($data);
        foreach ($data as $d ){?>

            <div class="col-12">
                <div class="card">
                    <div class="card card-header" style="background-color: white;">

                        <div class="row">

                            <h2 class="text-danger font-weight-bold"><?php echo $d->pname; ?> </h2>
                            <?php if($d->flag==0){?>
                                <button class="btn  btn-rounded btn-success m-l-30">Pending For Review</button>
                            <?php } ?>
                            <?php if($d->flag==6){?>
                                <button class="btn  btn-rounded btn-danger m-l-30">Pending At Admin Side</button>
                            <?php } ?>

                            <?php if($d->flag==33){?>
                                <button class="btn  btn-rounded btn-danger m-l-30">Removed From Marketplace</button>
                            <?php } ?>

                            <?php if($d->flag==17){?>
                                <button class="btn  btn-rounded btn-danger m-l-30">Pending At Admin</button>
                            <?php } ?>

                            <?php if($d->flag==18){?>
                                <button class="btn  btn-rounded btn-danger m-l-30">Live On Marketplace</button>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <?php
                            if($d->front_View!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->rand."/".$d->front_View; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->top_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->rand."/".$d->top_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->bottom_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->rand."/".$d->bottom_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            if($d->right_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->rand."/".$d->right_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">

                            <?php
                            if($d->left_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->rand."/".$d->left_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                        <div class="col-md-2">
                            <?php
                            if($d->isomatric_view!=null){?>
                                <img src='<?php echo base_url()."uploads/admin_product/".$d->rand."/".$d->isomatric_view; ?>' height="100px" width="100px" />
                            <?php } ?>
                        </div>
                    </div>
                    <div class="card card-footer" style="background-color: white;">




                        </div>
                    </div>
                </div>




        <?php } ?>
    </div>
    </div>
