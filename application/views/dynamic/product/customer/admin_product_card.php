
<div class="page-wrapper">
    <div class="row" style="margin:5px;">


                <?php foreach ($data as $d ){
                  ?>

                        <div class="col-12">
                            <div class="card">
                                <div class="card card-header" style="background-color: white;">
                                    <div class="row">
                                        <h2 class="text-danger font-weight-bold"><?php echo $d->pname; ?></h2>

                                            <a href="<?php echo base_url()."uploads/admin_product/".$d->rand.$d->pname."/stl/".$d->file_url;?>" ><button type="button" class=" btn btn-rounded btn-primary btn-sm" style="margin-left: 80px;"> <i class="mdi mdi-briefcase-upload"></i>Download</button></a>
                                            <form method="post"action='<?php echo base_url()."index.php/dynamic/product/ci_upload_customer/generate_quotation";?>' >
                                                <input type="hidden" name="product_id" value='<?php echo $d->pid;?>'/>
                                                <input type="hidden" name="product_name" value='<?php echo $d->pname;?>'/>
                                                <input type="hidden" name="uploaded_by" value='<?php echo $d->uploaded_by;?>'/>
                                                <a href="#"><button type="submit" class=" btn btn-rounded btn-danger btn-sm" style="margin-left: 80px;"><i class="mdi mdi-briefcase-upload"></i>Generate Quotation </button></a>
                                            </form>
                                            <a><button class="btn btn-sm btn-info btn-rounded m-l-5">Customer Price : <?php echo $d->customer_quote."  |  Our Price  ".$d->admin_quote;?></button></a>

                                        <?php if($d->flag==0){ ?>
                                            <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                            <button type="submit" class=" btn btn-rounded btn-success" style="margin-left: 80px;"><i class="mdi mdi-briefcase-upload"></i>Pending For Review</button>
                                        <?php } ?>

                                        <?php if($d->flag==1){ ?>
                                            <input type="hidden" name="pid" value='<?php echo $d->pid;?>'/>
                                            <button type="submit" class=" btn btn-rounded btn-info" style="margin-left: 80px;"><i class="mdi mdi-briefcase-upload"></i>Update Quotation</button>
                                        <?php } ?>

                                    </div>


                                </div>
                            </div>
                        </div>

        <?php }?>

</div>
