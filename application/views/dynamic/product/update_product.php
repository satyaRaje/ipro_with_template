
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-6">
             <?php foreach ($data as $d){ ?>
            <form method="post" action="<?php echo base_url().'index.php/dynamic/product/ci_upload_customer/update_product'; ?>">

                <input type="hidden" value="<?php echo $d->pid; ?>" name="pid">
                <div class="form-group">
                    <label style="font-size: 20px;text-align: center;font-weight: bold;margin-left: 30%;">Upload Products</b></label>
                </div>

                <div class="form-group">
                    <label style="font-size: 16px">Product Name</label>
                    <input type="text" class="form-control" name="pname" value="<?php $d->pname?>">
                </div>


                <div class="form-group">
                    <label style="font-size: 16px">Catageory</label>
                    <select class="form-control" name="catageory">
                        <option value="Printing">Printing</option>
                    </select>
                </div>                <div class="form-group">
                    <label  style="font-size: 16px">Product Height</label>
                    <input text-size="16px" type="text" class="form-control" name="pheight" value="<?php $d->height?>">
                </div>

                <div class="form-group">
                    <label  style="font-size: 16px">Product Width</label>
                    <input type="text" class="form-control" name="pwidth"value="<?php $d->width?>">
                </div>

                <div class="form-group">
                    <label  style="font-size: 16px"> Product Volume</label>
                    <input type="text" class="form-control" name="pvolume" value="<?php $d->volume?>">
                </div>

                <div class="form-group">
                    <label  style="font-size: 16px"> Product Color</label>
                    <input type="text" class="form-control" name="pcolor" value="<?php $d->color?>">
                </div>


                <div class="form-group">
                    <label  style="font-size: 16px"> Product Diameter</label>
                    <input type="text" class="form-control" name="pdiameter" value="<?php $d->diameter?>">
                </div>


                <div class="form-group ">
                    <label  style="font-size: 16px">Description of Product</label>
                    <textarea  class="form-control" name="pdesc" placeholder="Product Description"><?php $d->description?></textarea>
                </div>

                <div class="form-group" align="center">
                    <input type="submit" class="btn btn-primary"  style="width:50%" value="Upload"/>
                </div>

            </form>
          <?php }?>

            <br><br>
        </div>
    </div>
</div>
