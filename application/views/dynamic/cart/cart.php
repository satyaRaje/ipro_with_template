<div class="page-wrapper">
    <div class="col-12">
    <div class="row" style="padding: 10px;">
        <div class="col-md-12">
      <div class="card">
          <div class="card-title">
             <h3 class="text font-weight-bold m-3">Shopping Cart</h3>
          </div>
          <div class="card-body" style="color:black">
            <table class="table">
             <tr style="font-weight: bolder;color:black;background-color: gold;">
                 <td>Item</td>
                 <td>Product Name</td>
                 <td>Price</td>
                 <td>Quantity</td>
                 <td>Total</td>
             </tr>
                <?php $tot=0;?>
                <?php foreach ($data as $d){?>
                <tr>
                  <form method="post" action="<?php echo base_url()."index.php/dynamic/purchase/ci_purchase/add_quantity_cart"?>">
                      <input type="hidden" value="<?php echo $d->id;?>" name="pid">
                    <td><img src="<?php echo $d->img;?>" style="height: 80px;width: 80px;"></td>
                    <td><?php echo $d->pname;?></td>
                    <td><?php echo $d->price;?></td>
                    <td><button class="btn btn-circle btn-sm btn-inverse m-2" type="submit" value="plus"><i class="mdi mdi-minus"></i></button>
                        <input type="text" value="<?php echo $d->qty;?>" style="width: 30px;text-align: center;" name="qty" readonly>


                        <button class="btn btn-circle btn-sm btn-inverse m-2"><i class="mdi mdi-plus" type="submit" value="minus"></i></button></td>
                    <td><?php $tot_p= $d->price * $d->qty;
                            echo $tot_p;
                       $tot+=$tot_p;
                    ?></td>
                  </form>
                </tr>
               <?php } ?>
                <tr>
                    <td>Total : </td>
                    <td><?php echo $tot;?></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary btn-rounded">Pay Now</button></td>
                </tr>

            </table>
          </div>
      </div>
        </div>
    </div>
    </div>
</div>

