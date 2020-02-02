<?php
require 'header.php';
?>
<body>
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<form class="login100-form validate-form"  method='post' action='backend.php'>

					<span class="login100-form-title p-b-26">Taker &nbsp; | &nbsp; Sign Up</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Organization / Individual Name"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password" autocomplete="off">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="phone_number">
						<span class="focus-input100" data-placeholder="Phone Number"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="register" value='register' class="submit">Sign Up</button>
						</div>
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