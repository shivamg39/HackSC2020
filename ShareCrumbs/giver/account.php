<?php
session_start();
if( !isset( $_SESSION['email']) ) {
	echo "You are not authorized to view this page. Go back <a href= '../selector.html'>home</a>";
	exit();
}
require 'header.php'
?>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div style="text-align: right;">
					<a href="./logout.php">
						<button type="button" class="btn btn-danger">Logout</button>
					</a>
				</div>
				<p>&nbsp;</p>
				<span class="login100-form-title p-b-26"  style="text-align: left;">
					Welcome back, <?php echo $_SESSION['name']; ?>
				</span>
				<a href="./listing.php"><h4>Add a new Listing</h4></a>
				<h4 style="color: #429348"><br />Your Previous Listings</h4>
				<?php include("items_special.php"); ?>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	<script src="giver/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="giver/vendor/animsition/js/animsition.min.js"></script>
	<script src="giver/vendor/bootstrap/js/popper.js"></script>
	<script src="giver/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="giver/vendor/select2/select2.min.js"></script>
	<script src="giver/vendor/daterangepicker/moment.min.js"></script>
	<script src="giver/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="giver/vendor/countdowntime/countdowntime.js"></script>
	<script src="giver/js/main.js"></script>

</body>
</html>
