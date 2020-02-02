<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/itemsStyles.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 
require 'database.php';
$conn = connect_db();
$result = mysqli_query($conn, "SELECT * FROM restaurant"); ?>
<?php if (mysqli_num_rows($result) > 0) { ?>
 
<ul class="event-list">
  <?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
  <li style="border: 5px; border-color: black;">
    <div class="info card border-success mb-3">
      <a href="https://maps.apple.com/?q=<?php echo $row["Latitude"]; ?>,<?php echo $row["Longitude"]; ?>"><h2 class="title card-header" style="font-size: 20px; margin-top: 0px;"><?php echo $row["RestaurantName"]; ?></h2></a>
      <p class="desc card-body">
        <?php echo $row["Address"]; ?><br />
        <a href="mailto:<?php echo $row["GiversEmail"]; ?>"><?php echo $row["GiversEmail"]; ?></a><br />
        <a href="tel:+1<?php echo $row["PhoneNum"]; ?>">+1 <?php echo $row["PhoneNum"]; ?></a><br />
      </p>
      <!-- Link to G Maps-->
    </div>
  </li>
  <?php $i++; } ?>
</ul>
<?php }  else {
  echo "No entries found";
}
?>