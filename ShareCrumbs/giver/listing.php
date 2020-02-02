<?php
require 'header.php';
?>
<body>
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<form class="login100-form validate-form"  method='post' action='backend2.php'>

					<span class="login100-form-title p-b-26" style="text-align: left">Add a new Listing</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="itemName">
						<span class="focus-input100" data-placeholder="Item Name"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="number" name="quantity">
						<span class="focus-input100" data-placeholder="Quantity"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="pickupTime" id="pickupTime">
						<span class="focus-input100" data-placeholder="Pick up Time duration"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="register" value='register' class="submit">Register</button>
						</div>
					</div>
					<div class="text-center p-t-60">
						<span class="txt1">
							Don’t want a new listing? &nbsp; <a class="txt2" href="./account.php">
							Cancel</a>
						</span>

						
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