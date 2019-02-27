<div class="row">
<?php foreach ($data as $d ){?>

    <div class="col-lg-3 col-md-6 m-t-20">
        <!-- Card -->
        <div class="card">
            <img class="card-img-top img-responsive" style="height: 300px;" src=<?php echo base_url()."uploads/admin_product/$d->pname/$d->front_View"?> alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title font-weight-bold"><?php echo $d->pname;?></h3>
                <p class="card-text"><?php echo $d->description;?></p>
                <button class=" btn btn-circle btn-sm btn-danger"><i class="fa fa-heart"></i></button>
                <button class="btn btn-circle btn-sm btn-primary"><i class="fa fa-list"></i></button>
                <button class="btn btn-rounded btn-sm btn-warning"><i class="mdi mdi-cart-plus"></i> Add Cart</button>
                <button class="btn btn-rounded btn-sm btn-info"><i class="mdi mdi-cart-plus"></i> Buy Now</button>
            </div>
        </div>
        <!-- Card -->
    </div>
<?php } ?>
</div>
