<?php include "database.php"; ?>

<!DOCTYPE html>  
<html lang="en">  
<head>
  <title>Segi Web App</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="icon" href="assets/logo.jpg" type="image/jpeg" sizes="32x32">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/bootstrap/bootstrap4-alpha3.min.css">
  <!-- Google Font Roboto -->
  <link rel="stylesheet" href="assets/fonts/font-roboto.css">
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <style>
    <?php echo file_get_contents("css.css"); ?>
  </style>
</head>
<div id="mySidebar" class="sidebar">

	<?php

	  $result = mysqli_query($mysqli, "SELECT * FROM tb_storedc ORDER BY store_name ASC");
	   if (! empty($result)) {

	?>

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="reguser.php">Register/ Login</a>
    <a href="firstcount.php">First Count Data</a>
    <a href="secondcount.php">Second Count Data</a>
    <a href="export.php">Export File</a>
    <a href="import.php">Import File</a>
    <a href="report.php">Reports</a>
</div>
<div class="navbar">
    <button class="openbtn" onclick="openNav()">☰</button>
    <a href="index.php">
    <img src="./assets/logoFull.jpg" href="index.php" alt="Logo Segi Value Holdings" style="width:235px;height:50px;" class="responsive"></a>
    <a class="active" href="index.php">Home</a>
	
	<div class="dropdown">
		<button class="dropbtn">Service Satisfaction Survey-Good
		</button>
		<div class="dropdown-content">
			<?php foreach 
				($result as $row) { 
			?>
			  <a href="satisfied.php?myid=<?php echo $row['store_id']; ?>"><?php  echo $row['store_name']; ?></a>
			<?php
				}
			?>
		</div>
	  </div>
	  <div class="dropdown">
		<button class="dropbtn">Service Satisfaction Survey-No Good
		</button>
		<div class="dropdown-content">
			<?php foreach 
				($result as $row) { 
			?>
			  <a href="notsatisfied.php?myid=<?php echo $row['store_id']; ?>"><?php  echo $row['store_name']; ?></a>
			<?php
				}
			 }
			?>
		</div>
	  </div>
</div>

 <body>
		
 </body>
    <br/><br/>
 <!-- <div class="footer"><h4><p>Copyright © SVH <?php echo date("Y"); ?></p></h4></div> -->
</html>