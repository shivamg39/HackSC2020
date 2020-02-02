<?php
require 'db_key.php';
$conn = connect_db();

$result = mysqli_query($conn, "SELECT * FROM sharecrumbs_giver");
?>

			<?php
				$row = mysqli_fetch_array($result)
			?>
			<?php echo $row["name"]; ?>