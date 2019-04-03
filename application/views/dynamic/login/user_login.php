
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        background-image: linear-gradient(to left bottom, #858383, #a2a1a1, #c0bfc0, #dfdfdf, #ffffff);
    </style>

<div class="container-fluid">
<form method="post" action='<?php echo base_url()."index.php/dynamic/login/login/login_success"; ?>'>
    <div class="row">
        <div class="col-sm-3"> </div>

        <div class="col-sm-6 border border-dark bg-light" style="border-radius:5px;;">
            <img src='<?php echo base_url().'/images/logo/logo.png'; ?>'  style=" padding-left:25%;height:100px;max-width: 100%;max-height: 100%;align:center;" class="text-center"/>
            <h1 class="text-center text-secondary">Login</h1>
            <div id="hide_email">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email_address" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <input type="button" class="btn btn-outline-secondary" id="email_check" value="Next">
                </div>
                <br>
            </div>


            <div id="hide_password">

                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" id="password"  aria-describedby="eotp" class="form-control" name="password" placeholder="Enter Password">
                    <small id="eotp" class="form-text text-muted text-primary">secure login </small>
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-outline-info"value="Login" >
                </div>
            </div>
            
            <div class="form-group">
                <a href='<?php echo base_url()."index.php/dynamic/login/login/login_page"?>' class="btn btn-primary float-right" style="padding-bottom:5px;">Register</a>
            </div>
         <br>
            
            <h6 class="text-danger" id="success_message"></h6>


        </div>

</form>
</div>
<br><br><br><br>
</form></div>


    <script>

    $(document).ready(function(){
        var email;
        var pass;
        var u_type;

        $("#success_message").hide();
        $("#hide_password").hide();
        $("#email_check").click(function () {
             email=$("#email_address").val();
            $.post('<?php echo base_url()."index.php/dynamic/login/login/email_exist_check";?>',
                {
                    name: email
                },
                function(data,status){

                    console.log(data);
                    var a=  data;
                    var jsonData = JSON.parse(data);
                    if(jsonData['status']==true){
                        jsonData['email_otp'];
                        u_type=jsonData['flag'];
                        console.log("user_type "+u_type)
                        $("#success_message").show();
                        $("#success_message").text(jsonData['otp_message']);
                        $("#email_address").attr('readonly', 'true');
                        $("#email_check").hide();
                        $("#hide_password").show();
                        pass=jsonData['password'];
                    }else{

                        $("#success_message").show();
                        $("#success_message").text(jsonData['otp_message']);
                    }


                });
        });
        
        $("#btn_login").click(function () {
            //var md5 = $.md5('gaurav');
            //console.log(md5);
            var email = $("#password").val();
            $.post('<?php echo base_url()."index.php/dynamic/login/login/encrypt_password";?>',
                {
                    name: email
                },
                function(data,status){

                    console.log(data);
                    var a=  data;
                    var jsonData = JSON.parse(data);
                    if(jsonData['enc']==pass){
                        if(u_type==1) {
                            window.location.replace('<?php echo base_url() . "index.php/dynamic/login/login/admin_dashboard";?>');
                        }else if(u_type==0){
                            window.location.replace('<?php echo base_url() . "index.php/dynamic/login/login/customer_dashboard";?>');
                        }else{
                            alert("Not Exist");
                        }
                    }else{

                        $("#success_message").show();
                        $("#success_message").text(jsonData['otp_message']);
                    }



                $("#success_message").show();
                $("#success_message").text("ok");

        });


    });
    });



</script>
