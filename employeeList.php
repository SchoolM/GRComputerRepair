<!DOCTYPE html>

<!-- processstudent.php 
     For avaluoest.html 
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
		
		<h1 class="formtitle">Employee List</h1>
		
		<?php
			
			// Coneccion con MySQL
			$conn = new mysqli("127.0.0.1", "root", "", "employee", 3306);
			
			if($conn->connect_errno)
			{
				echo "Failed to connect to MySQL: (" . $conn->connect_error . ")";
				exit;
			}
		
			// Construir el query
			$sql = "SELECT * FROM employees";
			//$query = "SELECT NUMEST, APELLIDOS, NOMBRE, CELULAR FROM estudiantes";
			
			// Ejecutar el query
			
			$result = $conn->query($sql);
				
			$rows = $result->num_rows;
			if ($rows > 0) {
				// output data of each row
				  while($row = $result->fetch_assoc()) {
					echo "Id: " . $row["Employee_Id"]. " - Name: " . $row["_Name"]. " " . $row["Last_Name"]. " - Phone Number: " . $row["Phone_Number"] . " - Professional Email: " . $row["Professional_Email"] . " - Job: " . $row["Job"] ."<br>";
				  }
			} else {
				echo "0 results";
				}
			$conn->close();
			
		?>
		
	</body>
	
</html>