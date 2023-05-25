<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

<style>
.formstyle{
   background-image:url("https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428_1280.jpg")
}

.input-group-text {
			background: #eb4217!important;
			color: white !important;
			border: 10 !important; 
			border-radius: 0.25rem 0 0 0.25rem !important;
}
.card{
  background:	#FFCC99;
}
.register_btn {
			width: 70%;
			background: #eb4217 !important;
			color: white !important;
		}
    
</style>

</head>
<body>
    
<div id="show"></div>
<div class="formstyle">
<h3 class="text-uppercase text-center mb-4" style="color:white; padding-top:25px;">Register</h3>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-5 col-xl-6">
          <div class="card" style="border-radius: 10px;">
            <div class="card-body p-4">
      

              <form id ="myform">

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append ">
								<span class="input-group-text"><i class="fa fa-sitemap"></i></span>
							</div>
                  <input type="text" id="organization" name='organization' class="form-control form-control-sm oname"  placeholder="Organization Name*"  />
                </div>
                <p id="orgcheck"></p>
                  
                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-lock"></i></span>
							</div>
                <input type="text" id="adminname" name="adminname" class="form-control form-control-sm" placeholder="Admin Name*" />
              </div>
              <p id="adcheck"></p> 

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
                <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Email*" />
                </div>
              <p id="emailcheck"></p>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>              
                <input type="number" id="phone" name="phone" class="form-control form-control-sm" placeholder="Phone*" />
              </div>
              <p id="phonecheck"></p>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>                 
               <input type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Password*" />
                </div>
                <p id="passcheck"></p>

                <div class="form-outline mb-4">
                <div class="input-group mb-4">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-check-circle"></i></span>
							</div>                 
               <input type="password" id="conpassw" name="conpassw" class="form-control form-control-sm" placeholder="Confirm Password*" />
                </div>
                <p id="cpasscheck"></p>
                
                <div class="d-flex justify-content-center">
                  <button type="button" id="register" name="register"
                    class="btn register_btn btn-block btn-md gradient-custom-4 text-body" >Register</button>
                </div>

                <div>
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="http://localhost/Ubischool/login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>

$(document).ready(function(){

   $('#orgcheck').hide();
   $('#adcheck').hide();
   $('#emailcheck').hide();
   $('#phonecheck').hide();
   $('#passcheck').hide();
   $('#cpasscheck').hide();

   var org_err = true;
   var ad_err = true;
   var e_err = true;
   var ph_err = true;
   var pass_err = true;
   var cpass_err = true;
   
  $('#organization').keyup(function(){
   org_validate();
  })
    function org_validate(){
    var orgname= $('#organization').val();
    if(orgname.length == ""){
    $('#orgcheck').show();
    $('#orgcheck').html('**Please enter organization name');
    $('#orgcheck').focus();
    $('#orgcheck').css("color","red");
     org_err = false;
    return false;
   }
   else{
    $('#orgcheck').hide();
   }
   if(orgname.length<5 || orgname.length>30){
     $('#orgcheck').show();
     $('#orgcheck').html('**Length must be betweeen 5 and 30');
     $('#orgcheck').focus();
     $('#orgcheck').css("color","red");
     org_err = false;
    return false
    }
    else{
     $('#orgcheck').hide();
    }

    if(orgname.match(/^[a-zA-Z]*$/)){
    $('#orgcheck').hide();
   }
   else{
    $('#orgcheck').show();
    $('#orgcheck').html('** name must contain albhabets only');
    $('#orgcheck').focus();
    $('#orgcheck').css("color","red");
     org_err = false;
    return false;
   }
  }

  // ADMIN NAME VALIDATIONS.......................................................

  $('#adminname').keyup(function(){
     adminname_check();

  });

  function adminname_check(){
   var ad_name = $('#adminname').val();
   
   if(ad_name.length == ""){
    $('#adcheck').show();
    $('#adcheck').html('**Please enter admin name');
    $('#adcheck').focus();
    $('#adcheck').css("color","red");
    ad_err = false;
    return false;
   }
   else{
    $('#adcheck').hide();
   }

   if(ad_name.length<5 || ad_name.length>30){
    $('#adcheck').show();
    $('#adcheck').html('**Length must be betweeen 5 and 30');
    $('#adcheck').focus();
    $('#adcheck').css("color","red");
    ad_err = false;
    return false;
   }
   else{
    $('#adcheck').hide();
   }

   if(ad_name.match(/^[a-zA-Z]*$/)){
    $('#adcheck').hide();
   }
   else{
    
    $('#adcheck').show();
    $('#adcheck').html('**name must contain albhabets only');
    $('#adcheck').focus();
    $('#adcheck').css("color","red");
    ad_err = false;
    return false;
   }
  }

  // EMAIL VALIDATIONS.......................................................


  $('#email').keyup(function(){
     email_check();

  });

  function email_check(){
   var email = $('#email').val();
   
   if(email.length == ""){
    $('#emailcheck').show();
    $('#emailcheck').html('**Please enter email name');
    $('#emailcheck').focus();
    $('#emailcheck').css("color","red");
    e_err = false;
    return false;
   }
   else{
    $('#emailcheck').hide();
   }

   if(email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
    $('#emailcheck').hide();
   }
   else{
    
    $('#emailcheck').show();
    $('#emailcheck').html('**please enter valid email');
    $('#emailcheck').focus();
    $('#emailcheck').css("color","red");
    e_err = false;
    return false;
   }
  }

  // PHONE VALIDATIONS...................

  $("#phone").keyup(function(){
    phone_check();
  });

  function phone_check(){
  var phone = $("#phone").val();

  if(phone.length == ""){
    $('#phonecheck').show();
    $('#phonecheck').html('**Please enter phone no.');
    $('#phonecheck').focus();
    $('#phonecheck').css("color","red");
    ph_err = false;
    return false;
   }
   else{
    $('#phonecheck').hide();
   }
   if(phone.length == 10 ){
    $('#phonecheck').hide();
   }
   else{
    $('#phonecheck').show();
    $('#phonecheck').html('**Invalid Length ');
    $('#phonecheck').focus();
    $('#phonecheck').css("color","red");
    ph_err = false;
    return false;
   }

   if(phone[0] == 6 || phone[0]== 7 || phone[0]==8 || phone[0]==9){
    $('#phonecheck').hide();
   }
   else{
    $('#phonecheck').show();
    $('#phonecheck').html('**Invalid phone no. ');
    $('#phonecheck').focus();
    $('#phonecheck').css("color","red");
    ph_err = false;
    return false;
   }
}


// PASSWORD VALIDATIONS..............................

$("#password").keyup(function(){
  pass_validate();
});

  function pass_validate(){
  var password = $("#password").val();
  if(password.length == ""){
    $('#passcheck').show();
    $('#passcheck').html('**Please enter password');
    $('#passcheck').focus();
    $('#passcheck').css("color","red");
    pass_err = false;
    return false;
   }
   else{
    $('#passcheck').hide();
   }
   if(password.length != 8){
    $('#passcheck').show();
    $('#passcheck').html('**Password must have 8 characters');
    $('#passcheck').focus();
    $('#passcheck').css("color","red");
    pass_err = false;
    return false;
   }
   else{
    $('#passcheck').hide();
   }

   if(password.match((/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))){
    $('#passcheck').hide();
   }

   else{
    $('#passcheck').show();
    $('#passcheck').html('**please enter a strong password');
    $('#passcheck').focus();
    $('#passcheck').css("color","red");
    pass_err = false;
    return false;
   }
  }

  $("#conpassw").keyup(function(){
   confirm_password();
  });

 function confirm_password(){
  var password = $("#password").val();
  var cpass = $("#conpassw").val();
  if(cpass == password){
    $('#cpasscheck').hide();
  }
  else{
    $('#cpasscheck').show();
    $('#cpasscheck').html('**not matched with password');
    $('#cpasscheck').focus();
    $('#cpasscheck').css("color","red");
    cpass_err  = false;
    return false;
  }
  }
  $("#register").click(function(){

    var organization = $('#organization').val();
    var admin = $("#adminname").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var pass = $("#password").val();
    var cpass = $("#conpassw").val();
    var register = $("#register").val(); 

    org_err = true;
    ad_err = true;
    e_err = true;
    ph_err = true;
    pass_err = true;
    cpass_err = true;

  org_validate();
  adminname_check();
  email_check();
  phone_check();
  pass_validate();
  confirm_password();

  if(org_err == true &&  ad_err == true && e_err==true && ph_err == true 
  && pass_err == true && cpass_err == true )
   {
    
    
    $.ajax({
     url:"registerbackend.php",
     type:"POST",
     data:{organization:organization,
           admin:admin,
           email:email,
           phone:phone,
           pass:pass,
           cpass:cpass,
           register:register
     },    
     success:function(data)
     {
      $("#show").html(data);
     }   
    });
   }

   else
   {
    return false;
   }
   
  });
});


</script>

</body>
</html>










