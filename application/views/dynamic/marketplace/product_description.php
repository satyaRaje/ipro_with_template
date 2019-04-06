<body>
	<?php foreach ($data as $d ){?>
	<h2 class="card-title font-weight-bold" align="center"><?php echo $d->pname;?></h2><br>
	<div class="row">
		<div class="col-md-1">
			
		</div>
		<div class="col-md-4">
			<img class="card-img-top img-responsive" style="height: 250px;" src=<?php echo base_url()."uploads/admin_product/$d->pname/$d->front_View"?> alt="Card image cap">
		</div>
		<div class="col-md-1">
			
		</div>
		<div class="col-md-6">
			
            <p class="card-text" style="font-size: 20px"><b>Description : </b><font color="black" class="font-weight-bold"><?php echo $d->description;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Category :  </b><font color="black" class="font-weight-bold"><?php echo $d->catageory;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Product Price :  </b><font color="black" class="font-weight-bold"><?php echo $d->product_price;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Discount :  </b><font color="black" class="font-weight-bold"><?php echo $d->discount;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Height :  </b><font color="black" class="font-weight-bold"><?php echo $d->height;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Width :  </b><font color="black" class="font-weight-bold"><?php echo $d->width;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Volume :  </b><font color="black" class="font-weight-bold"><?php echo $d->volume;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Color :  </b><font color="black" class="font-weight-bold"><?php echo $d->color;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Diameter :  </b><font color="black" class="font-weight-bold"><?php echo $d->diameter;?></font></p>
            <p class="card-text" style="font-size: 20px"><b>Product MRP :  </b><font color="black" class="font-weight-bold"><?php echo $d->MRP;?></font></p>
		</div>
		<?php } ?>
	</div>
</body>