<?php include "database.php";
$id = $_GET["myid"];
?>

<!DOCTYPE html>  
<html lang="en">  
<head>
  <title>Segi Value Holdings</title>
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

<?php

  $result = mysqli_query($mysqli, "SELECT * FROM tb_storedc WHERE store_id='$id'");
   if (! empty($result)) {

?>

<div class="navbar" style="background-color:#cde0c2;">
	<h2 style="color:Black;" align="center">
	<img src="./assets/logo-welcome.png" style="width:235px;height:50px;" alt="Logo Segi Fresh">
		Kajian Kepuasan Pelanggan Segi Cash & Carry</h2><br />
</div>
 <body style="background-color:Lavender;">
		
    <form method="post" autocomplete="on">
    <div class="demo-table">
        <?php
            if (! empty($errorMessage) && is_array($errorMessage)) {
        ?>	
              <div class="error-message">
        <?php 
                foreach($errorMessage as $message) {
                    echo $message . "<br/>";
                }
        ?>
              </div>
        <?php
            }
        ?>

		<div >
		 <table border="0" cellpadding="10" cellspacing="0" width="500" align="left" class="tblSaveForm">
			<div class="field-column">
			
				<?php foreach 
					($result as $row) { 
				?>
				<h3 style="color:Black;">SEGI CASH & CARRY <?php  echo $row['store_name']; }}?></h3><br/>
				<p style="font-weight: bold;">Saya berpuas hati dengan perkhidmatan Segi Fresh.</p><br/>
				<p>
					<p for="noTel" data-icon="notel">Nombor Telefon<bold>*</bold></p>
					<input id="noTel" name="noTel" type="text" style="padding: 3px; border: #CCC 1px solid; border-radius: 4px; width: 50%;" placeholder="Masukkan nombor telefon anda" required>
				</p>
			</div>
			
			<br />
			<input type="submit" name="btnSubmit" value="Hantar" class="btn btn-info">
			<br /><br />
			<p>Terima kasih di atas kerjasama anda.</p>
		</table>
		</div>
	</div>

    </form>

 </body>
    <br/><br/>
 <!-- <div class="footer"><h4><p>Copyright © SVH <?php echo date("Y"); ?></p></h4></div> -->
</html>