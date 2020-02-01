<?php
require 'header.php';
?>
<body>
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<form class="login100-form validate-form"  method='post' action='backend.php'>

					<span class="login100-form-title p-b-26">
						Sign Up
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password" autocomplete="off">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="login" value= 'login' class="submit">Login</button>
						</div>
					</div>

					<div class="text-center p-t-80">
						<span class="txt1">
							Don’t have an account? &nbsp;
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
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>

<body>
	<div class = 'container'>
		<div>
			<div><h1>Register your Account</h1></div>
		</div>
		<form action = 'backend.php' method = 'POST'>
			<div class = 'p-5 m-5'>
				<div class="form-group">
					<label>Username:</label>
					<input class = 'form-control w-50' type="text" name="username" required>
					<label>Email:</label>
					<input class = 'form-control w-50' type="email" name="email" required>
					<label>Password:</label>
					<input class = 'form-control w-50' type="password" name="password" required>
					<div class ='text-center mt-3 w-50'>
						<button class = 'btn btn-outline-info' type = 'submit' value = 'submit' name= 'register'>Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>