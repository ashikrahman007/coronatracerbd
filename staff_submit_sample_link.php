<?php 

    include 'staff_sidebar.php';
    include 'connection_link.php'; 


    $Patient_name = $_POST['Patient_name'];
    $Age=$_POST['Age'];
    $Sex = $_POST['Sex'];
    $Email = $_POST['Email'];
    $Date_of_delivery = ($_POST['Date_of_delivery']);
    $Date_of_payment = $_POST['Date_of_payment'];
    $Sample_type =  $_POST['Sample_type'];
    $Sample_status = "Not yet";
    $Payment_status= "Due";

    if($Sample_type=="Blood")
    {
      $Cost=50;
    }
    else if ($Sample_type=="Urine")
    {
      $Cost=100;
    }
    elseif ($Sample_type=="X-ray") 
    {
      $Cost=150;
    }

    $query = "SELECT Email FROM patient WHERE Email = '$Email'";
    $result = mysqli_query( $conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row)
    {
          $sql = "INSERT INTO sample( Patient_name,Age,Sex , Email , Date_of_delivery,Date_of_payment,Sample_type,Cost,Sample_status,Payment_status) VALUES ('$Patient_name',$Age,'$Sex','$Email', '$Date_of_delivery', '$Date_of_payment','$Sample_type','$Cost','$Sample_status','$Payment_status')";

          if ($conn->query($sql) == TRUE) 
          {
             echo "<script> alert('Successfully Submitted the data to Pathologist');</script>";

          } 
          else
          {
             echo "<script> alert('Error');</script>";
          }
    }
    else 
    {
       echo "<script> alert('Insert Correct Email');</script>";
    }
 ?>

<center>
   <p>
      <form action="staff_submit_sample_link.php" method="post">

              <h1> Submit Sample Information </h1>
              <br>
                  
              <input type="text"   placeholder="Patient name" name="Patient_name" required >
              <br>
              <br> 

              <input type="text" placeholder="Age" name="Age" required >
              <br>
              <br>

              <div>
                 Gender : <select name="Sex">
                                <option value="Male" > Male</option>
                                <option value="Female"> Female</option>
                                <option value="Others"> Others</option>
                         </select> 
              </div>
              <br>

              <input type="text" placeholder="Email" name="Email" required>
              <br>
              <br>

               <div>
               Sample type :
                        <select name="Sample_type">
						    <option value="Blood">COVID-19</option>
                            <option value="Blood" > Blood</option>
                            <option value="Urine"> Urine</option>
                            <option value="X-ray"> X-ray</option>
                       </select> 
              </div>
              <br>

              <input type="Date" placeholder="Date of delivery" name="Date_of_delivery" required>
              <br>
              <br>

              <input type="Date" placeholder="Date of payment" name="Date_of_payment" required>
              <br>
              <br>
              <br>

              <button class="btn btn_one"> <b> Submit </b></button>
          
      </form> 
  
   </p>
</center>
