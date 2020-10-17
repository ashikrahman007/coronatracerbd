<?php 

	include 'staff_sidebar.php';
	include 'connection_link.php'; 

		if(isset($_POST['Sample_id']))
		{
			$Sample_id=$_POST['Sample_id'];
		}

		if(isset($_GET['Sample_id']))
		{
			$Sample_id=$_GET['Sample_id'];
		}

		$sql = "SELECT * FROM sample where Sample_id='$Sample_id'";

		$result = mysqli_query($conn, $sql);

		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) 
		    {
				 $Sample_type=$row["Sample_type"];			
		    }	
		}
		echo'<h1 class="Dashboard" >This is your report</h1>';

		if ($Sample_type=="Blood") 
		{

			$sql = "SELECT * FROM blood_sample_report where Sample_id='$Sample_id'";
			$result = mysqli_query($conn, $sql);
		
			if ($result->num_rows > 0) 
			{
			    echo "<br>";
			    echo "<table align=center>
					     <tr> 
							<th>Email</th>
							<th>Result</th>
							<th>Comment</th> 
						</tr>";
			    

			    while($row = $result->fetch_assoc()) 
			    {
			        echo "<tr> 
							<td>".$row["Email"]. "</td>
							<td>".$row["RESULT"]. "</td>   
							<td>".$row["COMMENT"]. "</td>  
			             </tr>";
			    }
			    echo "</table>";
			}
		}
		

?>
