<!DOCTYPE html>
<html>
<head>

	<title> PainDoc Doctor´s view </title>

	<!-- Dependencies -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="bookstore/alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="bookstore/alertifyjs/css/themes/default.css">
		<link rel="stylesheet" type="text/css" href="bookstore/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bookstore/footer.css">
		<script src="bookstore/jquery-3.6.3.min.js"></script>
		<script src="bookstore/alertifyjs/alertify.js"></script>
		<script src="bookstore/bootstrap/js/bootstrap.js"></script>
		<script src="bookstore/select2/dist/js/select2.js"></script>

</head>
<body style="background-color: #F0F8FF;">

	<!-- NavBar/Menu  -->
	  <nav class="navbar navbar-light bg-white">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="">
	        <img src="images/LogoPD.jpg" alt="" width="230" height="100" class="d-inline-block align-text-center">
	        <b>Patient finder</b>
	      </a>
	      <ul class="nav navbar-nav">
	        <li class="active"><a class="btn btn-light btn-sm" href="index.php"> Clean Search </a></li>
	    </div>
	  </nav>

  <!-- Search Formularie -->
  	<br>
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-4"></div>
  			<div class="col-sm-4">
			  	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			  		<table>
			  			<tr>
			  				<td> 
			  					<div class="form-group">
			  						<input type="text" class="form-control" name="name" id="name" placeholder="Enter patient name">
			  					</div>
			  				</td>
			  				<td>  
			  					<input type="submit" class="btn btn-primary btn-sm" name="Search" value="Search">
			  				</td>
			  			</tr>
			  		</table>
					</form>
				</div>
				<div class="col-sm-4"></div>
			</div>
  	</div>
  	<br></br>

  <!-- Visualization Cases -->
	
	<?php 

	if(isset($_POST['Search'])){

		$name = $_POST['name'];

    $directory="archive";
    $dirint = dir($directory);
    $find = 0; 
    while (($archivo = $dirint->read()) !== false)
    {
        if ($name == $archivo){
        		$find = 1;
        }
    }
    $dirint->close();

		if(empty($_POST['name'])){
		
		echo "<script language='JavaScript'>
			  alertify.error('Enter a Patient Name');
			  location.assign(index.php);
			  </script>"; 

	?>

			  <div class="container">
			  	<div class="row">
			  		<table style="text-align: center;">
			  			<td>
			  				<figure style="position: relative;" >
			  					<img src="images/patients.png" height="700" width="700" >
			  				</figure>
			  			</td>
			  		</table>
			  	</div>
			  </div>

	<?php } elseif ($find == 0) {

			echo "<script language='JavaScript'>
			  alertify.error('Patient is NOT in Data Base');
			  location.assign(index.php);
			  </script>"; 
	?>

			  <div class="container">
			  	<div class="row">
			  		<table style="text-align: center;">
			  			<td>
			  				<figure style="position: relative;" >
			  					<img src="images/patients.png" height="700" width="700" >
			  				</figure>
			  			</td>
			  		</table>
			  	</div>
			  </div>

	<?php } else { ?>

  	<div class="container">
  		<div class="row">
			  	<table style="text-align: center;">
			  		<tr>
			  			<td>
			  				<h6>Patient:</h6><h4><?php echo $name; ?></h4>
			  			</td>
			  		</tr>
			  		<tr>
			  			<td>
			  				<figure style="position: relative;" >
			  					<img src="<?php echo 'archive/'.$name ?>" height="auto" width="auto" >
			  				</figure>
			  			<td>
			  		<tr>
			  	</table>
			</div>
  	</div>

  <?php }	?>

	<?php	} else { ?> 

		<div class="container">
			<div class="row">
				<table style="text-align: center;">
					<td>
						<figure style="position: relative;" >
							<img src="images/patients.png" height="700" width="700" >
						</figure>
					</td>
				</table>
			</div>
		</div>

	<?php } ?>

  <hr>
  <footer class="footer">
    <p> Student: Jimena Sánchez Guerrero </p>
    <p> INCOM Proyect DIT Winter 2022-2023 </p>
  </footer>

</body>
</html>
