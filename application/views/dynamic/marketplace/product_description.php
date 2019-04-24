<body>
	<?php foreach ($data as $d ){?>
	<h2 class="card-title font-weight-bold" align="center"><?php echo $d->pname;?></h2><br>
	
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-5">
		<div class="col-md-1 "></div>
		<div class="col-md-10 card-img-top img-responsive " style="width: 100% "  style="background-image: url('<?php echo base_url()."uploads/admin_product/$d->pname/$d->front_View"?>)';" >
    	<img class="card-img-top img-responsive" id="myDiv" style="height: 250px;" src=<?php echo base_url()."uploads/admin_product/$d->rand/$d->front_View"?> alt="Card image cap">
     </div><br>
     <div class="row">
     
      <div class="col-md-2 border-right  border-bottom border-left border-top" style="max-height: 150px"  id="col1" onclick="col1()">
      	<br>
             <img class="card-img-top img-responsive  border-bottom border-top" style="height: 100px;" src=<?php echo base_url()."uploads/admin_product/$d->rand/$d->front_View"?> alt="Card image cap">
             <br>
             
         
     </div>
      <div class="col-md-2 border-right  border-bottom border-top" style="max-height: 150px" id="col2" onclick="col2()">
      	<br>
         <img class="card-img-top img-responsive border-bottom" style="height: 100px;" src=<?php echo base_url()."uploads/admin_product/$d->rand/$d->bottom_view"?> alt="Card image cap">
          <br>
      </div>
      <div class="col-md-2 border-right border-bottom border-top" style="max-height: 150px" id="col3" onclick="col3()">
      	<br>
          <img class="card-img-top img-responsive" style="height: 100px;" src=<?php echo base_url()."uploads/admin_product/$d->rand/$d->left_view"?> alt="Card image cap">
          <br>
      </div>
      <div class="col-md-2 border-right border-bottom border-top" style="max-height: 150px" id="col4" onclick="col4()">
      	<br>
          <img class="card-img-top img-responsive" style="height: 100px;" src=<?php echo base_url()."uploads/admin_product/$d->rand/$d->right_view"?> alt="Card image cap">
          <br>
      </div>
      <div class="col-md-2 border-right border-bottom border-top" style="max-height: 150px" id="col5" onclick="col5()">
      	<br>
          <img class="card-img-top img-responsive" style="height: 100px;" src=<?php echo base_url()."uploads/admin_product/$d->rand/$d->isomatric_view"?> alt="Card image cap">
          <br>
      </div>
  </div>
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

<?php foreach ($data as $d ){?>
  <form method="post" action='<?php echo base_url()."index.php/dynamic/purchase/ci_Purchase/add_to_cart"; ?>'>
    <input type="hidden" value="<?php echo $d->pid;?>" name="pid">
           <input type="hidden" value="<?php echo $d->pname;?>" name="pname">
           <input type="hidden" value="<?php echo $d->MRP;?>" name="price">
           <input type="hidden" value="<?php echo $d->discount;?>" name="discount">
           <input type="hidden" value="<?php echo base_url()."uploads/admin_product/$d->rand/$d->front_View"?>" name="img">
      <button class="btn btn-rounded btn-sm btn-info" type="submit"><i class="mdi mdi-cart-plus"></i> Add Cart</button>
  </form>
<?php } ?>
<br>
<form method="post" action="#">
<button  type="submit" class="btn btn-danger btn-rounded">Pay Now</button>
</form>
	</div>

</div>



        <script>
            function col1(){
                document.getElementById("myDiv").src = '<?php echo base_url()."uploads/admin_product/$d->rand/$d->front_View"?>';
                document.getElementById("myDiv").className += "col-lg-3 animated fadeIn";
            }
            function col2(){
                document.getElementById("myDiv").src = '<?php echo base_url()."uploads/admin_product/$d->rand/$d->bottom_view"?>';
                document.getElementById("myDiv").className += "col-lg-3 animated fadeIn";
            }
            function col3(){
                document.getElementById("myDiv").src = '<?php echo base_url()."uploads/admin_product/$d->rand/$d->left_view"?>';
                document.getElementById("myDiv").className += "col-lg-3 animated fadeIn";
            }
            function col4(){
                document.getElementById("myDiv").src = '<?php echo base_url()."uploads/admin_product/$d->rand/$d->right_view"?>';
                document.getElementById("myDiv").className += "col-lg-3 animated fadeIn";
            }
            function col5(){
                document.getElementById("myDiv").src = '<?php echo base_url()."uploads/admin_product/$d->rand/$d->isomatric_view"?>';
                document.getElementById("myDiv").className += "col-lg-3 animated fadeIn";
            }
        </script>
  <?php } ?>

</body>