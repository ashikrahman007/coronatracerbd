<?php 

	include 'patient_sidebar.php';  
 	include 'connection_link.php'; 

	$Email=$_SESSION['Email'];

	$sql = "SELECT * FROM appointment where Email='$Email'";

	$result = mysqli_query($conn, $sql);

	echo'<h1 class="Dashboard" >Appointment list</h1>';

	if ($result->num_rows > 0) 
	{
	    echo "<br>";
	    echo "<table align=center>
			     <tr> 
					<th>Appointment Date</th>
					<th>Appointment Slot</th>
					<th>Status</th> 
				</tr>";
	    

	    while($row = $result->fetch_assoc()) 
	    {
	        echo "<tr> 
					<td>".$row["Appointment_date"]. "</td>
					<td>".$row["Appointment_time"]. "</td>   
					<td>".$row["Appointment_status"]. "</td>  
	             </tr>";
	    }
	    echo "</table>";
	}
	else
	{
	    echo "0 results";
	}

	mysqli_close($conn);
?>
