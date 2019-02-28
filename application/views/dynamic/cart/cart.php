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
                <?php foreach ($data as $d){?>
                <tr>
                    <td><img src="<?php echo $d->img;?>" style="height: 80px;width: 80px;"></td>
                    <td><?php echo $d->pname;?></td>
                    <td><?php echo $d->price;?></td>
                    <td><?php echo $d->qty;?></td>
                    <td>Total</td>
                </tr>
               <?php } ?>
                <tr>
                    <td>Total : </td>
                    <td>600</td>
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

