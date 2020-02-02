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
				<span class="login100-form-title p-b-26">
					Welcome back, <?php echo $_SESSION['name']; ?>
				</span>
				<ul class="navbar-nav ml-auto" style="text-align: right;">
					<li class="nav-item">
						<a class="nav-link" href="./logout.php">Logout</a>
					</li>
				</ul>
				
				
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>

				<a href="giver/login.php"><button type="button" class="btn btn-success btn-lg btn-block">GIVER</button></a>
				
				<p>&nbsp;</p>

				<a href="taker/login.php"><button type="button" class="btn btn-primary btn-lg btn-block">TAKER</button></a>

				<div class="text-center p-t-100">
				</div>
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
