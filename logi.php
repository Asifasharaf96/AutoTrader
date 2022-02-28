<?php
session_start();

if ((isset($_SESSION["autotrader_admin"]) == session_id())) {	
	session_destroy();
	header("Location:./index.php");
	die();
} else 
if (isset($_SESSION["autotrader_user"]) == session_id()) {
	session_destroy();
	header("Location:./index.php");
	die();
} else {
?>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="styles/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/css/util.css">
	<link rel="stylesheet" type="text/css" href="styles/css/main.css">
	<!--===============================================================================================-->

	<style>
		.bg {
			/* The image used */
			/*background-image: url("./styles/images/banner4.jpg");

		/* Full height */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.trans {
			padding: 20px 90px 20px;
			font-size: 15px;
			background-position: center;
			cursor: pointer;
			color: #808080;
			background-color: transparent;
		}
	</style>
	<script type="text/javascript" language="javascript">
		function val() {

			var email = document.login.username.value;
			var pwd = document.login.password.value;

			if (email == "") {
				alert("Please Enter a email Id");
				document.login.username.focus();
				return false;
			}

			var regemail = /@gmail\.com$/;
			if (regemail.test(email) === false) {
				alert("Please enter a valid email address ");
				document.login.username.focus();
				return false;
			}

			var regpwd = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
			if (pwd == "") {
				alert("Please Enter a Password");
				document.login.password.focus();
				return false;
			}

		}

		function showPassword() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
				x.type = "text";
			}
		}

		function hidePassword() {
			var x = document.getElementById("myInput");
			if (x.type === "text") {
				x.type = "password";
			}
		}
	</script>

	<body>
		<div class="bg">
			<form method="post" name="login" action="login.php">
				<div class="limiter">
					<div class="container-login100">
						<div class="wrap-login100">
							<form class="login100-form validate-form">

								<span class="login100-form-title p-b-48">
									AUTO TRADER
								</span>

								<div class="wrap-input100 validate-input" data-validate="Valid email is: a@gmail.com">
									<input class="input100" type="email" placeholder="Email" name="username">
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter password">
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye" onmouseenter="showPassword()" onmouseleave="hidePassword()"></i>
									</span>
									<input class="input100" placeholder="Password" type="password" name="password" id="myInput">
								</div>


								<div class="container-login100-form-btn">
									<div class="wrap-login100-form-btn">
										<div class="login100-form-bgbtn"></div>
										<button onclick="return val()" name="login" class="login100-form-btn">
											Login
										</button>
									</div>
								</div>

								<div class="text-center p-t-50">

									<span class="txt1">
										Don’t have an account?
									</span>

									<a class="txt2" href="./user/user_reg.php">
										Sign Up
									</a>
								</div>

								<div class="container-login100-form-btn">
									<div class="wrap-login100-form-btn">

										<button class="trans" name="fpassword">
											forgot password
										</button>
									</div>
								</div>


							</form>
						</div>
					</div>
				</div>

				<div id="dropDownSelect1"></div>

			</form>
		</div>

		<!--===============================================================================================-->
		<script src="styles/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="styles/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="styles/vendor/bootstrap/js/popper.js"></script>
		<script src="styles/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="styles/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="styles/vendor/daterangepicker/moment.min.js"></script>
		<script src="styles/vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="styles/vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<!--<script src="styles/js/main.js"></script>-->

	</body>
<?php
}
?>