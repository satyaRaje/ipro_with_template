
<title>IPRO3D-User Profile</title>
<body>
    <br>
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>

    <form method="post" action="<?php echo base_url()."index.php/dynamic/product/ci_profile/update_profile"; ?>">
<div class="row" style="padding-right: 20%; padding-left: 20%;">
    <div class="col-lg-12">
        <div class="card">

            <?php foreach ($data as $d){?>
               <div class="card-body" style="background-color: #F5F5F5F5">
                       <h2 class="card-title">User Profile</h2>
                            <h6 class="card-subtitle"></h6>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="exampleInputuname">First Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="exampleInputuname" name="fname" placeholder="First name" value="<?php echo $d->fname;?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label>Gender</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect">
                                        <option selected="">Choose...</option>
                                        <option value="worker">Male</option>
                                        <option value="worker">Female</option>
                                    </select>
                                </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-email"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" id="exa-mpleInputEmail1" placeholder="Enter email" value="<?php echo $d->email;?>" disabled>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="mobileno">Mobile No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-mobile"></i>
                                                </span>
                                            </div>
                                            <input type="mobile" class="form-control" id="mobileno" placeholder="Enter Mobile no" value="<?php echo $d->mobile;?>" disabled>
                                        </div>
                                    </div>



                                 <div class="form-group">
                                        <label for="ti-dob">Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                   <i class="ti-calendar"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" type="date" namme="fname"  id="example-date-input">
                                             <ul role="alert"><li></li></ul>
                                        </div>
                                   </div>
                                
                                <!-- <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>-->
                                
                                 <div class="form-group">
                                        <label for="exampleInputuname">Job Section</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-bag"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Job section" value="<?php echo $d->job_desc;?>">
                                        </div>
                                    </div>


                                   <div class="form-group">
                                    <label for="exampleInputaddress">Address</label>
                                    <textarea class="form-control" rows="5" id="message" name="add1">
                                        <?php echo $d->address1;?>
                                </textarea> </div>
                                  
                               

                                <div class="form-group">
                                    <label>Alternative Address 1</label>
                                    <textarea class="form-control" rows="5" id="message" name="add2">
                                        <?php echo $d->address2;?>
                                </textarea> </div>
                                  
                                <div class="form-group">
                                    <label>Alternative Address 2</label>
                                    <textarea class="form-control" rows="5" id="message" name="add3">
                                        <?php echo $d->address3;?>
                                </textarea> </div>

                                <!-- <div class="form-group">
                                        <label for="exampleInputuname">Flag</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-flag"></i>
                                                </span>
                                            </div>-->

                                    
                                
                                    <div class="form-group">
                                    <label>City</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="city">
                                        <option selected="">Choose...</option>
                                        <option value="worker">Aurangabad</option>
                                        <option value="businessman">Pune</option>
                                        <option value="student">Nashik</option>
                                        <option value="other">Hydrabad</option>
                                    </select>
                                </div>


                                 <div class="form-group">
                                    <label>State</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="state">
                                        <option selected="">Choose...</option>
                                        <option value="worker">Maharashtra</option>
                                        <option value="businessman">AndraPradesh</option>
                                         <option value="businessman">Gujrat</option>
                                    </select>
                                </div>

                               
                

                                  <div class="form-group">
                                    <label>Country</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name="country">
                                        <option selected="">Choose...</option>
                                        <option value="worker">India</option>
                                        <option value="businessman">USA</option>
                                        <option value="student">Europe</option>
                                        <option value="other">Japan</option>
                                    </select>
                                </div>

                               
                

                               
                
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
            <?php }?>
                        </div>
                    </div>
                </div>
    </form>

            </div>
            <br>
</body>