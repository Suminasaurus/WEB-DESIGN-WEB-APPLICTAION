<?php
		$servername = "localhost";
		 $username = "root";
		  $password = "";
		  $dbname ="bookingcalender";
		  
		  $conn = new mysqli('localhost','root','','bookingcalendar');
		  if ($conn->connect_error) {
			  die("Connetction failed: ".$conn->connect_error);
		  }
		  
		  $sql = "SELECT * FROM booking1";
		  $result = $conn->query($sql);
		  
		  if ($result->num_rows>0){
			  
			  echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
			  echo '<tr><td align="center"><b>ID</b></td>
 				<td align="center"><b>User Name</b></td>
 				<td align="center"><b>email</b></td>
				<td align="center"><b>date</b></td>
				<TD align="center"><b>contact</b></td>';
			  
			  while($row = $result->fetch_assoc()){
				  echo'<tr>';
				  echo '<td align="center">'.$row["id"].'</td>';
 					echo '<td align="center">'.$row["name"].'</td>';
 					echo '<td align="center">'.$row["email"].'</td>';
				  	echo '<td align="center">'.$row["date"].'</td>';
				  	echo '<td
					align="center">'.$row["contact"].'</td>';
				 echo '</tr>';
 }
 }
 else {
 echo "0 results";
			  }
$conn->close();
			
	?>