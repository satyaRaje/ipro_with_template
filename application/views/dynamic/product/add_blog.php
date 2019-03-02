<div class="page-wrapper">
    <div class="col-12">

    <div class="row" style="padding-left: 20%;padding-right: 20%;">
                      <div class="col-lg-12"><br>
                      <div class="card">
                        <div class="card-body" style="background-color: #F5F5F5F5">
                            <h2 class="card-title" id="printing" align="center" style="font-weight: bold;font-family: Philosiphers">Add Blog</h2>

                     <form class="form p-t-20" method="post" action="<?php echo base_url()."index.php/dynamic/blog/ci_blog/insert_data";?>">
                                    <div class="form-group">
                                        <label for="exampleInputuname"> Topic Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tname" placeholder="">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label>Written By</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="writer_name" placeholder="">
                                        </div>
                                    </div>
                                   
                                <div class="form-group">
                                    <label>Blog</label>
                                  
                                    <textarea class="form-control" rows="8" name="message">
                                </textarea> </div>
                                  
                                     <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" >Add Blog</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <br>

 <div class="card" style="color: black;">
                    <div class="card-body">
                                <h2 class="card-title" align="center">Blogs</h2>
                                <!--<h6 class="card-subtitle"></h6>-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Id</th>
                                                <th>Customer Name</th>
                                                <th>Topic name</th>
                                                <th>Date</th>
                                                <th>View Blog</th>
                                           
                                            </tr>
                                        </thead>
                                        <tbody>

                                     <?php $i=1;
                                     foreach ($data as $d){?>
                                            <tr <?php if($d->flag==1){ echo "class='text text-primary'";}else{echo "class='text text-danger'";}?> >
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $d->cust_id;?></td>
                                                <td><?php echo $d->fname;?></td>
                                                <td><?php echo $d->blog_cont;?></td>
                                                <td><?php echo $d->dt;?></td>
                                                <td><form method="post" action="<?php echo base_url()."index.php/dynamic/blog/ci_blog/upload_blog"; ?>">
                                                        <input type="hidden" name="pid"  value="<?php echo $d->id;?>">
                                                        <input type="submit" class="btn btn-rounded btn-primary" value="Upload Blog">
                                                        <input type="submit" class="btn btn-rounded btn-danger" name="rmv" value="Remove">
                                                    </form></td>
                                            </tr>
                                         <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
 </div>
    </div>
</div>