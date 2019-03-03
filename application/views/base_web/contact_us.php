<title>IPRO3D-Contact_Us</title>
<body>
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
<div class="row" style="padding-left: 20%;padding-right: 20%;">
                      <div class="col-lg-12"><br>
                      <div class="card">
                        <div class="card-body" style="background-color: #F5F5F5F5">
                            <h2 class="card-title" id="printing" align="center" style="font-weight: bold;font-family: Philosiphers">Contact Us</h2>

                     <form class="form p-t-20" method="post" action="<?php echo base_url()."index.php/dynamic/enquiry/enquiry/add_contact"?>">
                                    <div class="form-group">
                                        <label for="exampleInputuname">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="fname" placeholder="Name">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label>Mobile Number</label>
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
                                        <label for="exampleInputEmail1">Email</label>
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
                                    <label>Info</label>
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
                                    <label>How you know about us</label>
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
                                    <label>Message</label>
                                  
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
                 </body>

                    
<!--<?php
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

?>-->
