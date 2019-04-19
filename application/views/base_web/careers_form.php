
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
                                <h2 class="card-title" align="center"><font color="black">Careers Form</font></h2>
                                <h6 class="card-subtitle" align="center">Great opportunity to work in a technology driven start-up with passionate and creative people this is the right place for you.</h6>
                                <form class="m-t-40"  method="post" action="<?php echo base_url(); ?>index.php/dynamic/enquiry/enquiry/insert_careers_form">
                                    <div class="form-group">
                                        <h5><font color="black">Email Field <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Name <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Father Name <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="text" name="father_name" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Mobile Number <span class="text-danger">*</span></font></h5>
                                        <input type="text" name="mobile_no" class="form-control" required="" data-validation-required-message="This field is required" max="10">
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Which position(s) are you interested in? <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="Design and Development ( Mechanical / Production / Industrial engineering)" name="position" required="" class="custom-control-input" aria-invalid="false"><span class="custom-control-label">Design and Development ( Mechanical / Production / Industrial engineering)</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="Web design and development ( Computer science / MCA / information technology )" name="position" class="custom-control-input" aria-invalid="false"><span class="custom-control-label">Web design and development ( Computer science / MCA / information technology )</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="Marketing and strategic planning (Mechanical / computer science/ production/ industrial engineering" name="position" class="custom-control-input" aria-invalid="false"><span class="custom-control-label">Marketing and strategic planning (Mechanical / computer science/ production/ industrial engineering</span> </label>
                                            </fieldset>
                                        <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                            <h5><font color="black">Education <span class="text-danger">*</span></font></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="Yes" name="education" required="" id="styled_radio_inline1" class="custom-control-input"><span class="custom-control-label">12th</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="No" name="education" id="styled_radio_inline2" class="custom-control-input"><span class="custom-control-label">Diploma</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="No" name="education" id="styled_radio_inline2" class="custom-control-input"><span class="custom-control-label">Degree</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="No" name="education" id="styled_radio_inline2" class="custom-control-input"><span class="custom-control-label">Masters</span> </label>
                                                </fieldset>
                                            <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">College Name <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="text" name="college" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Degree/Diploma/Masters Agreegate <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="text" name="degree" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                                <h5><font color="black">Year of Passing <span class="text-danger">*</span></font></h5>
                                                <div class="controls">
                                                    <input type="text" name="year_of_passing" class="form-control" required="" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                                <h5><font color="black">Why do you want to work at IPRO3D Technologies LLP.<span class="text-danger">*</span></font></h5>
                                                <div class="controls">
                                                    <textarea name="work" id="textarea" class="form-control" required="" placeholder="Your Answer"></textarea>
                                                <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <h5><font color="black">Upload Your Resume <span class="text-danger">*</span></font></h5>
                                        <div class="controls">
                                            <input type="file" name="file" class="form-control" required=""> <div class="help-block"></div></div>
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