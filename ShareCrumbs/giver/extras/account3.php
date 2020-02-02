<?php
session_start();
if( !isset( $_SESSION['email']) ){
	echo "You are not authorized to view this page. Go back <a href= './'>home</a>";
	exit();
}
require 'header.php'
?>
<body>
	<nav class="navbar navbar-expand-sm bg-light mb-4">
		<!-- Links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="./logout.php">Logout</a>
			</li>
		</ul>
	</nav>
	<h1>Welcome back, <?php echo $_SESSION['name'] ?></h1>
</body>
</html>