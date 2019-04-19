<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<div class="page-wrapper">
    <div class="col-12">

    <div class="row" style="padding-left: 20%;padding-right: 20%;">
                      <div class="col-lg-12"><br>
                      <div class="card">
                        <div class="card-body" style="background-color: #F5F5F5F5">
                            <font color="black">
                            <h2 class="card-title" id="printing" align="center" style="font-weight: bold;font-family: Philosiphers"><font color="black">Add Testimonial</font></h2>

                     <form class="form p-t-20" method="post" action="<?php echo base_url()."index.php/dynamic/testimonial/Ci_testimonial/insert_data";?>" enctype="multipart/form-data">
                                    
                                     <div class="form-group">
                                        <label>Testimonial's Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Testimonial's Designation</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tdesignation" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Testimonial's Company Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tcompany" placeholder="">
                                        </div>
                                    </div>
                         
                         <div class="form-group">
                                    <label>Testimonial's Comment</label>

                                    <textarea class="form-control" rows="8" name="tcomment">

                                </textarea> </div>
                         <script>
                         </script>
                                     <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" >Add Testimonial</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </font>
                            </div>
                        </div>
                    </div>

                </div>
                <br>

 <div class="card" style="color: black;">
                    <div class="card-body">
                                <h2 class="card-title" align="center">Testimonials</h2>
                                <!--<h6 class="card-subtitle"></h6>-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Testimonial Id</th>
                                                <th>Testimonial's Name</th>
                                                <th>Testimonial's Designation</th>
                                                <th>Testimonial's Company name</th>
                                                <th>Testimonial's Comments</th>
                                                
                                           
                                            </tr>
                                        </thead>
                                        <tbody>

                                     <?php $i=1;
                                     foreach ($data as $d){?>
                                            <tr <?php if($d->flag==1){ echo "class='text text-primary'";}else{echo "class='text text-danger'";}?> >
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $d->tid;?></td>
                                                <td><?php echo $d->tname;?></td>
                                                <td><?php echo $d->tdesignation;?></td>
                                                <td><?php echo $d->tcompany;?></td>
                                                <td><?php echo $d->tcomment;?></td>
                                                <td>
                                                    <form method="post" action="<?php echo base_url()."index.php/dynamic/testimonial/Ci_testimonial/insert_data"; ?>">
                                                        <input type="hidden" name="tid"  value="<?php echo $d->tid;?>">
                                                        <input type="submit" class="btn btn-rounded btn-primary" value="Upload Testimonial"><br><br>
                                                        <input type="submit" class="btn btn-rounded btn-danger" name="rmv" value="Remove"><br><br>
                                                    </form>
                                                </td>
                                            </tr>
                                         <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
 </div>
    </div>
</div>