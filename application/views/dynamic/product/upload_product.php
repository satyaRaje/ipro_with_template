     <div id="page-wrapper">
         <div class="row">
             <div class="col-lg-12">
                  <div class="card">
                   <div class="card-body">
                     <div class="table-responsive">
                         <table class="table">
                             <thead>
                             <tr>
                                 <th>Product Id</th>
                                 <th>Product Name</th>
                                 <th>File Name</th>
                                 <th></th>
                             </tr>
                             </thead>
                             <tbody>

                             <?php foreach ($data as $d ){?>
                            <form method="post" action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/remove_stl_file";?>'>
                                 <tr>
                                     <input type="hidden" name="product_id" value='<?php echo $d->pid;?>'>
                                     <td><?php
                                         echo md5($d->pid);
                                         ?></td>
                                     </td>
                                     <td><?php echo $d->pname;?></td>
                                     <td><?php echo $d->file_url;?></td>
                                     <td><button type="submit" class="bnt btn-primary">delete</button></td>

                                 </tr>
                            </form>
                             <?php } ?>

                             </tbody>
                         </table>
                     </div>
                   </div>
                  </div>
         </div>
     </div>

