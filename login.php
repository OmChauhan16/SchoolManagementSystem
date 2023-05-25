<!-- <?php
// session_start();
?> -->

<!DOCTYPE html>
<html>
    
<head>
	<title> Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100vh;
			width: 100vw;
			background-image: url("https://images.pexels.com/photos/1370296/pexels-photo-1370296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #FFCC99;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			/* background: #60a3bc; */
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #eb4217 !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #eb4217 !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
    </style>

</head>
<body>
	<div id ="msg"></div>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSoV3UVEYYDzQo_ai7F1YK0a0LOfBRTkAGT0aUuT9sYQ&usqp=CAU&ec=48600113" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="name" id="name" class="form-control input_user" value="" placeholder="Email/Phone">
						</div>
						<div id="namecheck"></div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" id="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div id="passcheck"></div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" name="button" id="login" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="http://localhost/Ubischool/register.php" class="ml-2">Sign Up</a>
					</div> 
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>


$(document).ready(function(){

	$("#namecheck").hide();
	$("#passcheck").hide();

	var name_err = true;
	var p_err = true;

	$("#name").keyup(function(){
		name_validate();
	});

	function name_validate(){
		var name= $("#name").val();
		if(name.length ==""){
	$('#namecheck').show();
    $('#namecheck').html('**Please enter Email or Phone');
    $('#namecheck').focus();
    $('#namecheck').css("color","red");
    name_err = false;
    return false;
   }
   else{
    $('#namecheck').hide();
   }
		}

   $("#password").keyup(function(){
     password_validate();
   });		

   function password_validate(){
	var pass = $("#password").val();
	if(pass.length ==""){
	$('#passcheck').show();
    $('#passcheck').html('**Please enter password');
    $('#passcheck').focus();
    $('#passcheck').css("color","red");
    p_err = false;
    return false;
   }
   else{
    $('#passcheck').hide();
   }
   }
	

$("#login").click(function(){

	var username= $("#name").val();
	var password = $("#password").val();
    var login = $("#login").val();

	name_err = true;
	p_err = true;

	name_validate();
	password_validate();

	if(name_err == true && p_err == true){

$.ajax({
type:"POST",
url:"loginbackend.php",
data:{
	username:username,
	password:password,
    login:login  
},
success:function(data)
{
	$("#msg").html(data);
}
});
	}



})
});

</script>






