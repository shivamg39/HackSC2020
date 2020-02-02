<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/itemsStyles.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 
require 'database.php';
$conn = connect_db();
$email = $_SESSION['email'];
$result = mysqli_query($conn, "SELECT * FROM restaurant LEFT JOIN items ON items.Iemail = restaurant.GiversEmail WHERE items.Iemail = '$email'"); ?>
<?php if (mysqli_num_rows($result) > 0) { ?>
 
<ul class="event-list">
  <?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
  <li style="border: 5px; border-color: black;">
    <div class="info card border-success mb-3">
      <p class="desc card-body">
        - <?php echo $row["menuItem"]; ?>, for <?php echo $row["quantity"]; ?> people from <?php echo $row["pickupTime"]; ?>
      </p>
      </p>
    </div>
  </li>
  <?php $i++; } ?>
</ul>
<?php }  else {
  echo "No entries found";
}
?>