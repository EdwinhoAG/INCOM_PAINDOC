<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PainDoc Sign In</title>
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="bookstore/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bookstore/BTdatepicker/css/bootstrap-datepicker.standalone.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script src="bookstore/jquery-3.6.3.min.js"></script>
	<script src="bookstore/BTdatepicker/js/bootstrap-datepicker.js"></script>
	<script src="js/functions.js"></script>
</head>
<body style="background-color: #F0F8FF";>
	<br><br><br>
	<div class="container">
		<div class = "row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						<h6>Welcome to...</h6>
					</div>
					<div class="panel panel-body">
						<p>
							<img src="images/LogoPD.jpg" width=230 height=100 />
						</p>
						<form id="PDlogin">
							<table class="table table-hover table-condensed" style="text-align: center;">
								<tr>
									<td>
										<label>Complete Name:</label>
										<input type="text" name="name" id="name" class="form-control input-sm">
									</td>
								</tr>
								<tr>
									<td>
										<label>Date of Birth:</label>
										<div id="bDpick" class="input-group date" data-provide="datepicker">
										<input name="birthDate" id="birthDate" type="component" class="form-control" placeholder="YYYY-MM-DD">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<br>
										<span class="btn btn-primary" id="Signin"> Sign In </span>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	<hr>
	<footer class="footer">
	  <p> Student: Edwin Sebna Albarrán García</p>
      <p>INCOM Proyect UAEMéx-DIT Winter 2022-2023</p>
    </footer>

    <?php 
	session_start();
	$_SESSION['L']=0; 
	?>

</body>
</html>

<script type="text/javascript">

	$('#bDpick').datepicker({
    format: "yyyy-mm-dd",
    startDate: "01/01/1900",
    endDate: "+0d",
    startView: 2,
    maxViewMode: 2,
    clearBtn: true
	});

	$(document).ready(function(){
		$('#Signin').click(function(){

			empty=ValidateEmptyForm('PDlogin');

			if(vacios > 0){
				alert("¡¡ Entry all the required information !!")
				return false;
			}

			datos=$('#PDlogin').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"processes/RegPat/RegPatient.php",
				success:function(r){
					if(r==1){
						window.location="views/painSelect.php";
					} else {
						alertify.error("Sign In Failed")
					}
				}
			});
		});
	});


</script>