<?php

	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'projectop';

	try {
	    $connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
	    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   //echo "Verbinding is gemaakt!";
	} catch(PDOException $e) {
	    echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
	}


	try{
		$query = "SELECT naam, email, opleiding, opmerking FROM contactform";
		$statement = $connection->query($query);
	} catch (PDOException $e){
		echo 'Fout bij SQL query:<br>' . $e-getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
	}

?>