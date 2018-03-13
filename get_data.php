<?php require_once "head.php" ?>
<?php require_once "db_connection.php" ?>
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
				<th onclick="sortTable(0)">id</th> 
				<th onclick="sortTable(1)">visit</th> 
				<th onclick="sortTable(2)">frequency</th> 
				<th onclick="sortTable(3)">rating</th> 
				<th onclick="sortTable(4)">attractiveness</th> 
				<th onclick="sortTable(5)">page_rating</th> 
				<th onclick="sortTable(6)">color</th> 
				<th onclick="sortTable(7)">easy_to_find_info</th> 
				<th onclick="sortTable(8)">ness_info</th> 
				<th onclick="sortTable(9)">info_type</th> 
				<th onclick="sortTable(10)">nawigation</th> 
				<th onclick="sortTable(11)">need_update</th> 
				<th onclick="sortTable(12)">need_update_text</th> 
				<th onclick="sortTable(13)">subject</th> 
				<th onclick="sortTable(14)">ness_social_media</th> 
				<th onclick="sortTable(15)">optional_social_media</th> 
				<th onclick="sortTable(16)">sex</th>
				<th onclick="sortTable(17)">age</th> 
				<th onclick="sortTable(18)">employee_type</th> 
			
				<th onclick="sortTable(20)">date</th>
			
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
									<td>" . $row['need_update'] . "</td> 
									<td>" . $row['need_update_text'] . "</td> 
									<td>" . $row['subject'] . "</td> 
									<td>" . $row['ness_social_media'] . "</td> 
									<td>" . $row['optional_social_media'] . "</td> 
									<td>" . $row['sex'] . "</td> 
									<td>" . $row['age'] . "</td> 
									<td>" . $row['employee_type'] . "</td>																			
									<td>" . $row['date'] . "</td>		
							  </tr>";  //$row['index'] the index here is a field name
						} 
						//odbc_close(); //Make sure to close out the database connection
						echo "</tbody>";
						echo "</table>"; //Close the table in HTML ?>
				</tbody>
		  </table>
		</div>
	</div>

   
				<script>
					function sortTable(n) {
					  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
					  table = document.getElementById("myTable");
					  switching = true;
					  //Set the sorting direction to ascending:
					  dir = "asc"; 
					  /*Make a loop that will continue until
					  no switching has been done:*/
					  while (switching) {
					    //start by saying: no switching is done:
					    switching = false;
					    rows = table.getElementsByTagName("TR");
					    /*Loop through all table rows (except the
					    first, which contains table headers):*/
					    for (i = 1; i < (rows.length - 1); i++) {
					      //start by saying there should be no switching:
					      shouldSwitch = false;
					      /*Get the two elements you want to compare,
					      one from current row and one from the next:*/
					      x = rows[i].getElementsByTagName("TD")[n];
					      y = rows[i + 1].getElementsByTagName("TD")[n];
					      /*check if the two rows should switch place,
					      based on the direction, asc or desc:*/
					      if (dir == "asc") {
					        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
					          //if so, mark as a switch and break the loop:
					          shouldSwitch= true;
					          break;
					        }
					      } else if (dir == "desc") {
					        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
					          //if so, mark as a switch and break the loop:
					          shouldSwitch= true;
					          break;
					        }
					      }
					    }
					    if (shouldSwitch) {
					      /*If a switch has been marked, make the switch
					      and mark that a switch has been done:*/
					      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
					      switching = true;
					      //Each time a switch is done, increase this count by 1:
					      switchcount ++;      
					    } else {
					      /*If no switching has been done AND the direction is "asc",
					      set the direction to "desc" and run the while loop again.*/
					      if (switchcount == 0 && dir == "asc") {
					        dir = "desc";
					        switching = true;
					      }
					    }
					  }
					}
				</script>

				<script>
					$(document).ready(function(){
					  $("#myInput").on("keyup", function() {
					    var value = $(this).val().toLowerCase();
					    $("#myTable tr").filter(function() {
					      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					    });
					  });
					});
				</script>
