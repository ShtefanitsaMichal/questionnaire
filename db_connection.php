<?php
	function globals(){global $username, $servername, $password, $dbname, $conn;};

	$servername = "localhost";
    	$username = "lesson_learned";
    	$password = "";
    	$dbname = "lesson_learned";

    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
?>




  
	
  
  
  
