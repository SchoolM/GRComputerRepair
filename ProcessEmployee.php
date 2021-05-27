<!DOCTYPE html>

<!-- processClient.php 
     For appointment.html 
-->

<html>

  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="Description" content="Affordable and professional computer repair">
	<meta name="Keywords" content="computer repair, affordable computer repair, professional repair">
	<meta name="author" content="Miguel A. González">
	<meta name="email" content="scooby.doo840@hotmail.com">
	<title>Processing Client</title>
	<link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../Images/GR_Logo.ico">
</head>

  <body>
		
		<!--Este es el encabezamiento de la pagina-->
		<header>
			<!--Barra de navegamiento-->
			<nav class="nav">
				<div class="nav-container">
					<!--Logo de la compañia-->
					
					<h2 id="nav-brand"><div id="Logo">
						<img src="../Images/GR Logo.png" style="max-width:140px;max-height:140px;">
					</div> GR Computer Repair</h2>
					<div class="nav-toggle" id="mobile-menu">
						<span class="bar"></span> <span class="bar"></span>
						<span class="bar"></span>
					</div>
					<ul class="nav-menu">
						<li class="nav-item"><a href="index.html" class="current">Home</a></li>
						<li class="nav-item"><a href="about.html" class="nav-links">About</a></li>
						<li class="nav-item"><a href="services.html" class="nav-links">Services</a></li>
						<li class="nav-item"><a href="appointment.html" class="nav-links">Contact</a></li>
						<li class="nav-btn"><a href="signup.html" class="button" class="nav-links">Sign Up</a></li>
					</ul>
				</div>
			</nav>
			<script src="../JavaScript/app.js"></script>
		</header>
		
		<h1 class="formtitle">Processing Employee Information</h1>
		
		<?php
			
			// Traemos los datos del formulario
			$employee_id = $_POST['employee_id'];
			$_name = $_POST['_name'];
			$middle_name = $_POST['middle_name'];
			$last_name = $_POST['last_name'];
			$phone_number = $_POST['phone_number'];
			$professional_email = $_POST['professional_email'];
			$personal_email = $_POST['personal_email'];
			$_address = $_POST['_address'];
			$job = $_POST['job'];
			$pin = $_POST['pin'];
			
			// Coneccion con MySQL
			$conn = new mysqli("127.0.0.1", "root", "", "employee", 3306);
			
			if($conn->connect_errno)
			{
				echo "Failed to connect to MySQL: (" . $conn->connect_error . ")";
				exit;
			}
		
			// Construir el query
			$query = "INSERT INTO employees(Employee_Id, _Name, Middle_Name, Last_Name, Phone_Number, Professional_Email, Personal_Email, _Address, Job, Pin) VALUES ('$employee_id', '$_name', '$middle_name','$last_name', '$phone_number', '$professional_email', '$personal_email', '$_address', '$job', '$pin');";
			trim($query);
			$query = stripslashes($query);
			
			// Ejecutar el query
			
			if(!$conn->query($query))
			{
				echo "Error the query couldnt execute: " . $conn->connect_error;
			}
			else
				echo "<h2>Employee " . $_name . " " . $last_name . " has been registerd.</h2>";
				
		?>
		<footer>
		<p>González Rosado Computer Repair, Copyright &copy; 2012</p>
	</footer>
	</body>
</html>