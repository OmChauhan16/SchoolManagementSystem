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
  /* background-image:url("jpg"); */
   /* overflow:hidden;  */
   background:#60a3bc;
}

.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 10 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
}
.card{
  background:	#FFCC99;
}
.register_btn {
			width: 70%;
			background: #c0392b !important;
			color: white !important;
		}
    .error{
      color:red;
    }
    
</style>

</head>
<body>
    

<div class="formstyle">
<h3 class="text-uppercase text-center mb-4" style="color:white">Register</h3>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-5 col-xl-6">
          <div class="card" style="border-radius: 10px;">
            <div class="card-body p-4">
      

              <form id ="myform">

                <div class="form-outline mb-4">
                <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-sitemap"></i></span>
							</div>

                  <input type="text" id="organization" name='organization' class="form-control form-control-sm oname"  placeholder="Organization Name*"  />
                  
                </div>
                <div>
                  <p id="orgcheck"></p>
                  </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-2">
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
                <p id="emailcheck"></p>  
              </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>              
                <input type="number" id="phone" name="phone" class="form-control form-control-sm" placeholder="Phone*" />
                <p id="phonecheck"></p>  
              </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>                 
               <input type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Password*" />
                  <p id="passcheck"></p>
                </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-check-circle"></i></span>
							</div>                 
               <input type="password" id="conpassw" name="conpassw" class="form-control form-control-sm" placeholder="Confirm Password*" />
                  <p id="cpasscheck"></p>
                </div>

                
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
   var org_err =true;
   
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
    var org_err = false;
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
     var org_err = false;
    return false
    }
    else{
     $('#orgcheck').hide();
    }

    if(orgname.match(/^[a-zA-Z]*$/)){
    $('#orgcheck').hide
   }
   else{
    $('#orgcheck').show();
    $('#orgcheck').html('** name must contain albhabets only');
    $('#orgcheck').focus();
    $('#orgcheck').css("color","red");
    var org_err = false;
    return false;
   }
  }
    
  $("#register").click(function(){

  var organization = $('#organization').val();
  var register = $("#register").val();

  org_err = true;

  org_validate();

  
   
    $.ajax({
     url:"registerbackend.php",
     type:"POST",
     data:{organization:organization,
           register:register
     },    
     success:function(data){
       console.log('gud');
     }
   
  });
});
});


  
 




// $("#register").click(function(){

//   // e.preventDefault();
//   var organization = $('organization').val();
//   var register = $("#register").val();
//     // console.log(organization);
   
//    org_err = true;
//    org_validate();

//    if(org_err == true){
//     return true;
//    }
//    else{
//     return false;
//    }
   
//   //  var register = $("#register").val();
//   $.ajax({
   
//      url:"registerbackend.php",
//      type:"POST",
//      data:{organization:organization,
//            register:register
//      },    
//      success:function(data){
//        console.log('gud');
//      }
   
//   });
  
//   });

// });
// });





// $("#myform").validate({
//     rules: {
//       organization :{ 
//         required:true,
//         minlength:5,
//         maxlength:30          
//       },   
//       adminname:{
//         required:true,
//         minlength:5,
//         maxlength:30
//       },
//       email:{
//         required:true,
//         email:true
//       },
//       phone:{
//       minlength:10,
//       maxlength:10,
//       },
//       password: {
//           required: true,
//           minlength: 8,
//           maxlength: 8,
         
//        }, 
//        conpassw:{
//         required: true,
//         minlength: 8,
//         maxlength: 8,
//         equalto:password
//        }
//       },
//        messages:{
//         org_name :{
//         required:"Please enter organization name",
//         minlength:"Min lengthmust be 5" ,
//         maxlength:"Max lengthmust be 30"
//         },
//         adminname:{
//         required:"Please enter admin name",
//         minlength:"Min length must be 5",
//         maxlength:"Max length must be 30"
//       },
//       email:{
//         required:"Please enter your email",
//         email:"please enter valid email"
//       },
//       phone:{
//         required:"Please enter your phone no.",
//       minlength:"Min length must be 5",
//       maxlength:"Max length must be 30",
//       },
//       password:{
//         required:"Please enter password",
//         minlength: "Please enter 8 characters",
//         maxlength: "please enter 8 characters only",
//         useLowercase:"Use  atleast 1 lowercase letter ",
//         useUppercase:"Use  atleast 1 uppercase letter ",
//         useNumbers:"Use atleast 1 number ",
//         useSpecial:"Use atleast 1 special character",
//       }
//        },

//   //   }      
//   // }
//   submitHandler:function(form){
//     form.submit() 
//     var register= $("#register").val();
//     var organization= $("#organization").val();
//     var admin= $("#adminname").val();
//     var phone= $("#phone").val();
//     var email= $("#email").val();
//     var password = $("#password").val();
//     var conpassw = $("#conpassw").val();
//     $.ajax({
//       type: "POST",
//       url: "registerbackend.php",
//       data: { 
//         register:register,
//         organization:organization,
//         admin:admin,
//         phone:phone,
//         email:email,
//         password:password,
//         conpassw:conpassw      
//       },
//       success: function (response) {
//         console.log(response);
//       }
//     }); 
//   }
// });

</script>




</body>
</html>










