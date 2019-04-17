<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<div class="page-wrapper">
    <div class="col-12">

    <div class="row" style="padding-left: 20%;padding-right: 20%;">
                      <div class="col-lg-12"><br>
                      <div class="card">
                        <div class="card-body" style="background-color: #F5F5F5F5">
                            <font color="black">
                            <h2 class="card-title" id="printing" align="center" style="font-weight: bold;font-family: Philosiphers"><font color="black">Complaint Box</font></h2>

                     <form class="form p-t-20" method="post" action="<?php echo base_url()."index.php/dynamic/product/ci_profile/Add_complaint";?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">Email Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" value="<?php echo $this->session->email;?>" readonly>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label>Mobile No</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="mobile_no" value="<?php echo $this->session->mobile;?>" readonly>
                                        </div>
                                    </div>

                         <div class="form-group">
                                    <label>Message</label>

                                    <textarea class="form-control" rows="8" name="message">

                                </textarea> </div>
                         <script>
                         </script>
                                     <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" >Add Compalint</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </font>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
        <h2 class="card-title" align="center">Complaint</h2>
        <!--<h6 class="card-subtitle"></h6>-->
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Complaint</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Complaint</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1; foreach ($data as $d){?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $d->email;?></td>
                            <td><?php echo $d->mobile;?></td>
                            <td><?php echo $d->complaint_text;?></td>

                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>