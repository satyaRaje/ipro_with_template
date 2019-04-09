
<div class="page-wrapper">
    <div class="row" style="margin:5px;">


        <?php foreach ($data as $d ){?>

            <div class="col-12">
                <div class="card">
                    <div class="card card-header" style="background-color: white;">
                        <div class="row">
                            <h2 class="text-danger font-weight-bold"><?php echo $d->pname; ?></h2>

                                <a href="<?php echo base_url()."uploads/admin_product/".$d->rand."/stl/".$d->file_url;?>" ><button type="button" class=" btn btn-rounded btn-primary btn-sm m-l-20"> <i class="mdi mdi-briefcase-upload"></i>Download</button></a>
                                <a href="<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/update_product_form?pid=".$d->pid; ?>"><button type="button" class=" btn btn-rounded btn-primary btn-sm m-l-20" > <i class="mdi mdi-briefcase-upload"></i>Product Detail</button></a>

                                <form method="post"action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/generate_quotation";?>' >
                                    <input type="hidden" name="product_id" value='<?php echo $d->pid;?>'/>
                                    <input type="hidden" name="product_name" value='<?php echo $d->pname;?>'/>
                                    <input type="hidden" name="uploaded_by" value='<?php echo $d->uploaded_by;?>'/>
                                    <a href="#"><button type="submit" class=" btn btn-rounded btn-danger btn-sm" style="margin-left: 80px;"><i class="mdi mdi-briefcase-upload"></i>Generate Quotation </button></a>
                                </form>
                             <a><button class="btn btn-sm btn-info btn-rounded m-l-5">Customer Price : <?php echo $d->customer_quote."  |  Our Price  ".$d->admin_quote;?></button></a>
                            <form method="post"action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/upload_product_on_marketplace";?>' >
                                <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                <button type="submit" class=" btn btn-rounded btn-primary" style="margin-left: 80px;"> <i class="mdi mdi-briefcase-upload"></i>Upload on Marketplace</button>
                            </form>

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

                </div>
            </div>



        <?php } ?>

    </div>
