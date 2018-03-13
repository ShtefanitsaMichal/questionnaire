<?php require "db_connection.php" ?>
<?php 
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM lesson_learned.questionnaire;' ;
 			$get_all_data = $conn->prepare($sql);
 			$get_all_data -> execute(array($sql));
 			$all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
        	$all = $all_row;
        }
        	 catch(PDOException $e)
                            {
                            echo $sql . "<br>" . $e->getMessage();
                            }

                 $conn = null;
    try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$count_lessons = "SELECT count(*) as 'count' FROM lesson_learned.questionnaire ";
 			$count_all_data = $conn->prepare($count_lessons);
 			$count_all_data -> execute(array($count_lessons));
 			$all_row = $count_all_data->fetch(PDO::FETCH_ASSOC); 
      $count = $all_row;
        }
        	 catch(PDOException $e)
                            {
                            echo $count . "<br>" . $e->getMessage();
                            }

                 $conn = null;   
                          

  		
  ?>
	
  <div class="col-sm-11" style="margin-left: 30px; ">
	<div class="row" >
		<div class="alert alert-info col-sm-12" role="alert">
  		<strong>Info!</strong> <?php print "This database include " . ($count['count']-1) . " record(s)"; ?>
  		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		 </button>
  		</div>

  		

  		<div class="row">
  			<input class="form-control" id="myInput" type="text" placeholder="Search data in your table ...">
  		</div>

  		<hr>

  		<div class="row">	
		  <table class="table table-hover table table-bordered" id="myTable">
		    <thead>
		    <tr style="cursor: pointer;" class="info">
				<th onclick="sortTable(0)">1</th> 
				<th onclick="sortTable(1)" class="col">1</th> 
				<th onclick="sortTable(2)">1</th> 
				<th onclick="sortTable(3)">1</th> 
				<th onclick="sortTable(4)" style="min-width: 300px;">1</th> 
				<th onclick="sortTable(5)" style="min-width: 300px;">1</th> 
				<th onclick="sortTable(6)" style="min-width: 300px;">1</th> 
				<th onclick="sortTable(7)">1</th> 
				<th onclick="sortTable(8)">1</th> 
				<th onclick="sortTable(9)">1</th> 
				<th onclick="sortTable(10)" style="min-width: 200px;">1</th> 
				<th onclick="sortTable(11)" style="min-width: 300px;">1</th> 
				<th onclick="sortTable(12)">1</th> 
				<th onclick="sortTable(13)">1</th> 
				<th onclick="sortTable(14)">1</th> 
				<th onclick="sortTable(15)">1</th> 
				<th onclick="sortTable(16)" style="min-width: 100px;">1</th>
				<th onclick="sortTable(17)">1</th> 
				<th onclick="sortTable(18)">1</th> 
				<th onclick="sortTable(19)">1</th> 
				<th onclick="sortTable(20)">1</th>
				<th onclick="sortTable(21)">1</th> 
		      </tr>
		    </thead>
    

    		<tbody>
      		<?php

						while($row = $get_all_data->fetch(PDO::FETCH_ASSOC)) 
						{   //Creates a loop to loop through results
						echo "<tr>	
									<td>" . $row['id'] . "</td> 
									<td>" . $row['visit'] . "</td> 
									<td>" . $row['frequency'] . "</td> 
									<td>" . $row['rating'] . "</td> 
									<td>" . $row['attractiveness'] . "</td> 
									<td>" . $row['page_rating'] . "</td> 
									<td>" . $row['color'] . "</td> 
									<td>" . $row['easy_to_find_info'] . "</td> 
									<td>" . $row['ness_info'] . "</td> 
									<td>" . $row['info_type'] . "</td> 
									<td>" . $row['nawigation'] . "</td> 
									<td>" . $row['subject'] . "</td> 
									<td>" . $row['ness_social_media'] . "</td> 
									<td>" . $row['optional_social_media'] . "</td> 
									<td>" . $row['sex'] . "</td> 
									<td>" . $row['age'] . "</td> 
									<td>" . $row['employee_type'] . "</td>
									<td>" . $row['ip'] . "</td>
									<td>" . $row['hostname'] . "</td>
									<td>" . $row['date'] . "</td>
									<td>" . $row['date_normal'] . "</td>		
							  </tr>";  //$row['index'] the index here is a field name
						} 
						//odbc_close(); //Make sure to close out the database connection
						echo "</tbody>";
						echo "</table>"; //Close the table in HTML ?>
				</tbody>
		  </table>
		</div>
	</div>

   
			