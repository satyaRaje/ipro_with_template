<html>
    <head>
        <title>Marketplace</title>

<body>
    <div class="container">
     <div class="row">   
     
    <?php foreach ($data as $d ){?>
 <div class="col-sm-3">
            
<div class="card">
  <img class="card-img-top" src="<?php echo base_url().'uploads/admin_product/'.$d->pname."/".$d->front_View; ?>" height="180rem"alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $d->pname;?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

</div>

<?php } ?>
</div>
 </div>
 
 <div class="container">
     <div class="row">
       <div class="col-sm-3">
               
         </div>
         
     </div>
      
 </div>
 
 
 
 
</body>
</html>