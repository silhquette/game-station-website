<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/login/util.css">
	<link rel="stylesheet" type="text/css" href="/css/login/main.css">
<!--===============================================================================================-->

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/c101a12428.js" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-5">
				<form class="login100-form validate-form" method="POST" action="/login">
					@csrf
					<span class="login100-form-title p-b-40 ">
						Login Game Station
					</span>

					{{-- email --}}
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@domain.c">
						<input class="input100" type="text" value="{{ old('email') }}" name="email" autofocus>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					{{-- passowrd --}}
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					{{-- login button --}}
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					@if (session('loginError'))
					<div class="alert alert-danger alert-dismissible fade show mt-3 py-2" role="alert">
						<strong>Sorry!</strong> {{ session('loginError') }}
						<button type="button" class="btn-close py-0 top-50 translate-middle-y" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif

					<div class="text-center p-t-25">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/bootstrap/js/popper.js"></script>
	<script src="vendor/login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/daterangepicker/moment.min.js"></script>
	<script src="vendor/login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/login/main.js"></script>

</body>
</html>