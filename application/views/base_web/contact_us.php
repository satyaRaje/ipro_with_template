<title>IPRO3D-Contact_Us</title>
<body>
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
    <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-default">Ribbon</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
<div class="row" style="padding-left: 40%;padding-right: 5%;">
                      <div class="col-lg-8"><br>
                      <div class="card">
                        <div class="card-body" style="background-color: #F5F5F5F5;background-image:url('<?php echo base_url();?>assets/images/slider/b1.png')">
                            <h2 class="card-title" id="printing" align="center" style="font-weight: bold;font-family: Philosiphers">Contact Us</h2>

                     <form class="form p-t-20" method="post" action="<?php echo base_url()."index.php/dynamic/enquiry/enquiry/add_contact"?>">
                                    <div class="form-group">
                                        <label for="exampleInputuname"><b>Name</b></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="fname" placeholder="Enter Name">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label><b>Mobile Number</b></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-mobile"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="mobileno" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><b>Email</b></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-email"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                   <div class="form-group">
                                    <label><b>Info</b></label>
                                    <select class="custom-select col-12" name="inlineFormCustomSelect">
                                        <option selected="">select</option>
                                        <option value="worker">Student</option>
                                        <option value="businessman">Industry</option>
                                        <option value="student">Employee</option>
                                        <option value="student">Designer</option>
                                        <option value="student">Maker</option>
                                        <option value="student">Professional</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><b>How you know about us</b></label>
                                    <select class="custom-select col-12" name="inlineFormCustomSelect2">
                                        <option selected="">select</option>
                                        <option value="news">Newspaper</option>
                                        <option value="news">Google</option>
                                        <option value="socialsites">Social Media</option>
                                        <option value="college">College</option>
                                        <option value="workplace">Working Place</option>
                                        <option value="friend">Friends</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><b>Message</b></label>
                                  
                                    <textarea class="form-control" rows="5" name="message">
                                </textarea> </div>
                                  
                                     <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="send">Send Message</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" style="background-color: #bbbbbb;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.2523532716305!2d75.31352311425753!3d19.871563331647998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb99e84cc7f4e7%3A0x8ef52048513cb04!2sIPRO3D+Technologies+LLP!5e0!3m2!1sen!2sin!4v1534930979184" style="width:100%;height: 400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<br><br><br>
<hr>
    <div class="container">
        <div class="row" align="center">
            <div class="col-md-3" >
            </div>
            <div class="col-md-6" >
                <div class="thumbnail center well well-sm text-center">
                    <h2>Newsletter</h2> 
                    <p>Subscribe to our Newsletter and stay tuned.</p>
                    <form action="" method="post" role="form">
                        <div class="input-group">
                          <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                          </span>
                          <input class="form-control" type="text" id="" name="" placeholder="your@email.com">
                        </div><br>
                        <input type="submit" value="Subscribe" class="btn btn-large btn-primary" />
                  </form>
                </div>    
            </div>
        </div><br>
    </div>


                 </body>

                    
<?php
if(isset($_POST['send'])){
  /*  $query= "INSERT INTO `tblEnquiry`(`name`, `mobile`, `email`, `course`) VALUES ('".$_POST['fname']."','".$_POST['mobileno']."','".$_POST['email']."','".$_POST['message']."')";
    $conn = mysqli_connect("localhost","root", "","dbipro3d");
    $check = mysqli_query($conn,$query);*/
    $to = "hello@ipro3d.io";
    $subject = "Email Enquiry : ";
    $txt = "Student Name : ".$_POST['fname']." Requirement's : ".$_POST['message']." Mobile No. : ".$_POST['mobileno']." Email Address : ".$_POST['email'];
    $headers = "From: mit@arkay.org" . "\r\n" .
        "CC: swaranjalik24@gmail.com";
    mail($to,$subject,$txt,$headers);

    echo "<script>alert('Thanks For Contact...!');</script>";
}

?>
