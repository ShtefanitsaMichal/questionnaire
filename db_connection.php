<?php

	function globals(){
	 global $username, $servername, $password, $dbname, $conn;	
	} ;
	

	$servername = "localhost";
    $username = "lesson_learned";
    $password = "Ewq2RVHUxO6FN64Y";
    $dbname = "lesson_learned";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
?>

<?php 
	/*
	abstract class db_connection 
	{
		
		function db_connection()
		{
			$servername = "localhost";
   			$username = "lesson_learned";
   			$password = "Ewq2RVHUxO6FN64Y";
   			$dbname = "lesson_learned";
   			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
		}
	}
*/
 ?>



  
	
  
  
  