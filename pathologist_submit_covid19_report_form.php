<?php 

    include 'pathologist_sidebar.php';
    include 'connection_link.php'; 

    if(isset($_GET['Sample_id']))
    {
        $id=$_GET['Sample_id'];
        $sql = "SELECT * FROM sample where Sample_id='$id'";

        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0) 
        {
              while($row = $result->fetch_assoc()) 
              {
                  $Sample_id=$row["Sample_id"];
                  $Patient_name=$row["Patient_name"];
                  $Age=$row['Age'];
                  $Sex = $row['Sex'];
                  $Email = $row['Email'];
                  $Date_of_payment = $row['Date_of_payment'];
                  $Payment_status= $row['Payment_status'];
              }
        }
    }

 ?>


  <center>
    
      <form action="pathologist_submit_covid19_report_link.php" method="post">

            <h1> <big>Report data Submisson</big></h1>
            <br>

            <input type="text"  name="Sample_id" value="<?php echo $Sample_id; ?>" readonly>
            <br>
            <br> 
            
            <input type="text"  name="Patient_name" value="<?php echo $Patient_name; ?>"readonly>
            <br>
            <br> 

            <input type="text"  name="Email" value="<?php echo $Email; ?>"readonly>
            <br>
            <br> 

            <input type="text"  name="Age" value="<?php echo $Age; ?>" readonly>
            <br>
            <br>

            <input type="text" name="Sex" value="<?php echo $Sex; ?>"readonly>
            <br>
            <br>

            <input type="text" placeholder="Blood group" name="Blood_group" required>
            <br>
            <br>
			
            <input type="text" placeholder="RESULT" name="RESULT" >
            <br>
            <br>

            <input type="text" placeholder="COMMENT" name="COMMENT" >
            <br>
            <br>
            <br>

            <button class="btn btn_one" name="Submit" value="<?php echo $Sample_id; ?>" ><b>Submit</b></button>
          
      </form> 
      
  </center>


