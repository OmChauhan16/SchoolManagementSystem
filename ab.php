<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Register Page</title>
    <style>
        body{
            background-image:url("back3.jpg");
            /* background-image:fixed;   */
        }
        .error{
          color:red;
        }
    </style>
</head>
<body>
    <section class="vh-100 bg-image"
  style="background-image: ">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h4 class="text-uppercase text-center mb-4">Registration</h4>

              <form id="userform">
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Organisation Name*</label>
               <input type="text" id="organisation" name="organisation" class="form-control" />
                </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Admin Name*</label>
               <input type="text" id="admin" name="admin" class="form-control"/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Phone no.*</label>
               <input type="text" id="phone_no" name="phone_no" class="form-control"/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Email*</label>
                <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">New Password</label>
                <input type="password" name="password" id="password" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Confirm New password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control " />
                </div>
                  <div class="d-flex justify-content-center">
                  <button type="submit" id="registerbtn"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<script>
$("#userform").validate({
  rules:{
    organisation:{
        required:true,
        minlength:5,
        maxlength:20
    },
    admin:{
      required:true,
      minlength:5,
        maxlength:20
    },
    phone_no:{
      required:true,
      minlength:10,
      maxlength:10
    },
    email:{
      required:true,
      email:true
    },
    password:{
      minlength:8
    },
    confirm_password:{
      equalTo:"#password"
    }
  },
  messages:{
   password:{
    minlength:'Atleast 8 character'
   },
   confirm_password:{
    equalTo:"confirm Password Doesn't match with password"
   } 
  },
  submitHandler:function(form){
    form.submit() 
    var registerbtn=$("#registerbtn").val();
    var organisation=$("#organisation").val();
    var admin=$("#admin").val();
    var phone_no=$("#phone_no").val();
    var email=$("#email").val();
    $.ajax({
      type: "POST",
      url: "save.php",
      data: { 
        registerbtn:registerbtn,
        organisation:organisation,
        admin:admin,
        phone_no:phone_no,
        email:email       
      },
      success: function (response) {
        console.log(response);
      }
    }); 
  }
});



</script>