
<form method="post" action="<?php echo base_url()."index.php/dynamic/purchase/ci_purchase/generate_bill"?>">
<div class="page-wrapper">
    <div class="col-12">
    <div class="row" style="padding: 10px;">
        <div class="col-md-12">
      <div class="card">

          <div class="card-title">
             <h3 class="text font-weight-bold m-3">Shopping Cart</h3>
          </div>

          <div class="card-body" style="color:black">

              <input type="hidden" id="address1" name="bill_address" value="">
              <?php
               //var_dump($data2);
              $i=1;
              foreach ($data2 as $d){?>
                  <table class="table">
                          <tr>
                              <td><?php echo "Address ".$i; $i++;?></td>
                             <td><input type="button" class="btn btn-sm" value="<?php echo $d->address1;?>" onclick="address(this)"></td>
                          </tr>

                      <tr>
                          <td><?php echo "Address ".$i;?></td>
                          <td><input type="button" class="btn btn-sm" value="<?php echo $d->address2;?>" onclick="address(this)"></td>
                      </tr>

                      <tr>
                          <td><?php echo "Address ".$i;?></td>
                          <td><input type="button" class="btn btn-sm" value="<?php echo $d->address3;?>" onclick="address(this)"></td>
                      </tr>
                  </table>

              <?php } ?>
              <script>
                 function address(a){
                     document.getElementById("address1").value=a.value;
                     document.getElementById("b").innerText="Billing Address : "+a.value;
                 }
              </script>
              <label class="label label-primary" id="b"></label>

            <table class="table">
             <tr style="font-weight: bolder;color:black;background-color: gold;">
                 <td>Item</td>
                 <td>Product Name</td>
                 <td>Price</td>
                 <td>Quantity</td>
                 <td>Total</td>
                 <td></td>
             </tr>
                <?php $tot=0;
                 $count=0;
                ?>
                <?php foreach ($data as $d){?>
                <tr>
                  <form method="post" action="<?php echo base_url()."index.php/dynamic/purchase/ci_purchase/add_quantity_cart"?>">
                      <input type="hidden" value="<?php echo $d->pid;?>" name="<?php echo $count."pid";?>">
                      <input type="hidden" value="<?php echo $d->pid;?>" name="<?php echo "pid";?>">
                      <input type="hidden" value="<?php echo $d->pname;?>" name="<?php echo $count."pname";?>">
                      <input type="hidden" value="<?php echo $d->price;?>" name="<?php echo $count."price";?>">
                      <input type="hidden" value="<?php echo $d->img;?>" name="<?php echo $count."img";?>">
                    <td><img src="<?php echo $d->img;?>" style="height: 80px;width: 80px;"></td>
                    <td><?php echo $d->pname;?></td>
                    <td><?php echo $d->price;?></td>
                    <td><button class="btn btn-circle btn-sm btn-inverse m-2" type="submit" value="minus" name="minus"><i class="mdi mdi-minus"></i></button>
                        <input type="text" value="<?php echo $d->qty;?>" style="width: 30px;text-align: center;" name="<?php echo $count."qty";?>" readonly>
                        <input type="hidden" value="<?php echo $d->qty;?>" style="width: 30px;text-align: center;" name="<?php echo "qty";?>" readonly>


                        <button class="btn btn-circle btn-sm btn-inverse m-2"  type="submit" value="plus" name="plus"><i class="mdi mdi-plus" value="minus"></i></button></td>
                    <td><?php $tot_p= $d->price * $d->qty;
                            echo $tot_p;
                       $tot+=$tot_p;
                    ?></td>
                      <td><button class="btn btn-circle btn-sm m-2 btn-danger" type="submit" value="remove"><i class="fas fa-window-close"></i></button></td>
                  </form>
                </tr>


               <?php $count++; }
               ?>
                <tr>
                    <td>Total : </td>
                    <td><?php echo $tot;?></td>
                </tr>
                <input type="hidden" name="tot_amount" value="<?php echo $tot;?>" >
               <input type="hidden" name="tot_count" value="<?php echo $count; ?>" >
                <tr>
                    <td>Discount Code : </td>
                    <td><input type="text" name="discout_code" id="discount_value"> </td>
                </tr>


                <tr>
                    <td><button  type="submit" class="btn btn-primary btn-rounded">Pay Now</button></td>
                </tr>

            </table>


          </div>
      </div>
        </div>
    </div>
    </div>
</div>

</form>

