<!DOCTYPE html>
<html>
	<head>
		<title>Gegevens verwerkt ― Media- en applicatieontwikkeling ― Mediacollege Amsterdam</title>

		<?php

			require "config.php";

			$naam = $_POST["naam"];
			$email = $_POST["email"];
			$opleiding = $_POST["opleiding"];
			$opmerking = $_POST["opmerking"];

			$stmt = $connection->prepare("INSERT INTO contactform (naam, email, opleiding, opmerking) VALUES (:naam, :email, :opleiding, :opmerking)");
			$stmt->bindParam(':naam', $naam);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':opleiding', $opleiding);
			$stmt->bindParam(':opmerking', $opmerking);

			$stmt->execute();

		?>

		<link rel="stylesheet" type="text/css" href="../script/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/icon/icon.ico" />

	</head>
	<body>

		<!-- NAVIGATIE BAR -->
		<nav>
			<img src="../img/ma-logo.svg" width="200px" height="200px">
			<div>
				<h1><span id="rozeLetter">M</span>edia- en applicatieontwikkeling</h1>
				<h2><span id="rozeLetter">M</span>ediacollege Amsterdam</h2>
			</div>
		</nav>

		<!-- VERWERKT -->
		<section class="verwerkt">
			
			<h4><span id="rozeLetter">U</span>w gegevens zijn verwerkt!</h4>
			<a href="../index.php"><h2>Klik hier om terug te keren</h2></a>

		</section>

	</body>
</html>