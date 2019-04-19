
<body style="background-color: #DCDCDC">
<div class="page-wrapper" style="min-height: 651px;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title" align="center"><font color="black">Mutation Form</font></h2>
                                <h6 class="card-subtitle" align="center">Great opportunity to work in a technology driven start-up with passionate and creative people this is the right place for you.</h6>
                                <form class="m-t-40" method="post" action="<?php echo base_url(); ?>index.php/dynamic/enquiry/enquiry/insert_mutation_form">
                                    <div class="form-group">
                                        <h5><font color="black">Email <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Full Name <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Mobile Number <span class="text-danger">*</span></font></h5>
                                        <input type="text" name="mobile_no" class="form-control" required="" data-validation-required-message="This field is required" max="10">
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Whatsapp Number <span class="text-danger">*</span></font></h5>
                                        <input type="text" name="whatsapp_no" class="form-control" required="" data-validation-required-message="This field is required" max="10">
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                                <h5><font color="black">Date of Birth</font><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="dob" class="form-control" placeholder="MM/DD/YYYY" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email" aria-invalid="false"> <div class="help-block"></div></div>
                                            </div>
                                    <div class="form-group">
                                        <h5><font color="black">College ID<span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="text" name="college_id" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Year of Admission <span class="text-danger">*</span></font></h5>
                                        <input type="text" name="year_of_admission" class="form-control" required="" data-validation-required-message="This field is required" max="4">
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    
                                    <div class="form-group">
                                                <h5><font color="black">Year of Study<span class="text-danger">*</span></font></h5>
                                                <div class="controls">
                                                    <select name="year_of_study" id="select" required="" class="form-control" aria-invalid="false">
                                                        <option value="">Select Year</option>
                                                        <option value="1">First Year</option>
                                                        <option value="2">Second Year</option>
                                                        <option value="3">Third Year</option>
                                                        <option value="4">Final Year</option>
                                                        <option value="5">Other</option>
                                                    </select>
                                                <div class="help-block"></div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                                <h5><font color="black">Engineering / Diploma</font><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="degree" id="select" required="" class="form-control" aria-invalid="false">
                                                        <option value="">Select Your Degree</option>
                                                        <option value="1">Engineering Degree</option>
                                                        <option value="2">Diploma Degree</option>
                                                        <option value="3">Direct Second Year Degree</option>
                                                        <option value="4">Architecture</option>
                                                        <option value="5">M.E./M.Tech</option>
                                                        <option value="5">Others</option>
                                                    </select>
                                                <div class="help-block"></div></div>
                                            </div>
                                            <div class="form-group">
                                                <h5><font color="black">College</font><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="college" id="select" required="" class="form-control" aria-invalid="false">
                                                        <option value="">Select Your College</option>
                                                        <option value="1">Marathwada Institute of Technology,Aurangabad</option>
                                                        <option value="2">Maharashtra Institute of Technology,Aurangabad</option>
                                                        <option value="3">CSMSS college of Engineering</option>
                                                        <option value="4">Jawaharlal Nehru College of Engineering</option>
                                                        <option value="5">PES College of Engineering</option>
                                                        <option value="6">Others</option>
                                                    </select>
                                                <div class="help-block"></div></div>
                                            </div>
                                    <div class="form-group">
                                                <h5><font color="black">Department</font><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="department" id="select" required="" class="form-control" aria-invalid="false">
                                                        <option value="">Select Your Department</option>
                                                        <option value="1">Mechanical Engineering</option>
                                                        <option value="2">Civil Engineering</option>
                                                        <option value="3">Plastic and Polymer Engineering</option>
                                                        <option value="4">Computer Science and Engineering</option>
                                                        <option value="5">Electricals and Electronic Engineering</option>
                                                        <option value="6">Others</option>
                                                    </select>
                                                <div class="help-block"></div></div>
                                            </div>
                                            <div class="form-group">
                                                <h5><font color="black">Interests</font><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="interests" id="select" required="" class="form-control" aria-invalid="false">
                                                        <option value="">Select Your Interest</option>
                                                        <option value="1">Engineering Design</option>
                                                        <option value="2">Product Design</option>
                                                        <option value="3">Architecture</option>
                                                        <option value="4">Art and Craft</option>
                                                        <option value="5">Manufacturing Process</option>
                                                        <option value="5">Automobile</option>
                                                        <option value="5">Aerospace</option>
                                                        <option value="5">Medical / Health care</option>
                                                        <option value="5">Exploring new Technologies</option>
                                                        <option value="5">Website Design and App Development</option>
                                                        <option value="5">Others</option>
                                                    </select>
                                                <div class="help-block"></div></div>
                                            </div>
                                            <div class="form-group">
                                                <h5><font color="black">Future Goals</font><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="future_goals" id="select" required="" class="form-control" aria-invalid="false">
                                                        <option value="">Select Your Future goal</option>
                                                        <option value="1">Job</option>
                                                        <option value="2">Master/M.S.</option>
                                                        <option value="3">Government Job</option>
                                                        <option value="4">Start Up</option>
                                                        <option value="5">Other</option>
                                                    </select>
                                                <div class="help-block"></div></div>
                                            </div>
                                            
                                    <div class="form-group">
                                                <h5><font color="black">Comments</font><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="comments" id="textarea" class="form-control" required="" placeholder="Textarea text"></textarea>
                                                <div class="help-block"></div></div>
                                            </div>
                                    
                                    <button type="submit" class="btn btn-info" align="center">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </body>