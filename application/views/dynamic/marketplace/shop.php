<div class="row">

</div>

<div class="row">
<?php foreach ($data as $d ){?>

    <div class="col-lg-3 col-md-6 m-t-20">
        <!-- Card -->
       <form method="post" action='<?php echo base_url()."index.php/dynamic/purchase/ci_Purchase/add_to_cart"; ?>'>
           <input type="hidden" value="<?php echo $d->pid;?>" name="pid">
           <input type="hidden" value="<?php echo $d->pname.$d->rand;?>" name="pname">
           <input type="hidden" value="<?php echo $d->product_price;?>" name="price">
           <input type="hidden" value="<?php echo $d->discount;?>" name="discount">
           <input type="hidden" value="<?php echo base_url()."uploads/shop/".$d->pname.$d->rand."/".$d->front_View;?>" name="img">
        <div class="card">
            <img class="card-img-top img-responsive" style="height: 250px;" src="<?php echo base_url()."uploads/shop/".$d->pname.$d->rand."/".$d->front_View;?>" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title font-weight-bold"><?php echo $d->pname;?></h3>
                <p class="card-text"><?php echo $d->description;?></p>
                <button class=" btn btn-circle btn-sm btn-danger"><i class="fa fa-heart"></i></button>
                <button class="btn btn-circle btn-sm btn-primary"><i class="fa fa-list"></i></button>
                <button class="btn btn-rounded btn-sm btn-info"><i class="mdi mdi-share-variant"></i> Share</button>
                <button class="btn btn-rounded btn-sm " type="submit"><i class="mdi mdi-cart-plus"></i> Add Cart</button>
                <button class=" btn btn-circle btn-sm btn-outline "><i class="fa fa-star"  style="color: gold"></i></button>
                <button class=" btn btn-circle btn-sm btn-outline "><i class="fa fa-star"  style="color: gold"></i></button>
                <button class=" btn btn-circle btn-sm btn-outline "><i class="fa fa-star"  style="color: gold"></i></button>
                <button class=" btn btn-circle btn-sm btn-outline "><i class="fa fa-star" ></i></button>
                <button class=" btn btn-circle btn-sm btn-outline "><i class="fa fa-star"></i></button>
            </div>
        </div>

       </form>
        <!-- Card -->
    </div>
<?php } ?>
</div>


