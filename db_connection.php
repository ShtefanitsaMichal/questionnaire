<?php
	function globals(){global $username, $servername, $password, $dbname, $conn;};

	$servername = "localhost";
    	$username = "";
    	$password = "";
    	$dbname = "";

    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
?>




  
	
  
  
  
