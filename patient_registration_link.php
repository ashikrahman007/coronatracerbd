<?php 

    include 'header.php';
    include 'connection_link.php'; 

    $Patient_name = $_POST['Patient_name'];
    $User_type="'Patient'";
    $Phone_number = $_POST['Phone_number'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Password = ($_POST['Password']);
    $Date_of_register = $_POST['Date_of_register'];
    $Balance=2000;


    $sql = "INSERT INTO patient( Patient_name,User_type,Phone_number ,Address, Email , Password,Date_of_register,Balance) VALUES ('$Patient_name',$User_type,'$Phone_number','$Address','$Email', '$Password', '$Date_of_register','$Balance')";

    if ($conn->query($sql) == TRUE) 
    {
       echo "<script> alert('Successfully Registered. You can login now');</script>";
    } 
    else 
    {
       echo "<script> alert('Error! The email has been registered already');</script>";
    }

?>



<center>
  <p>
  
    <form action="patient_registration_link.php" method="post">

          <h1> Patient Registration </h1>
          <br>
     
          <input type="text"   placeholder="Patient name" name="Patient_name" required >
          <br>
          <br> 

          <input type="text" placeholder="Phone number" name="Phone_number" required >
          <br>
          <br>

          <input type="text" placeholder="Address" name="Address" required>
          <br>
          <br>

          <input type="text" placeholder="Email" name="Email" required>
          <br>
          <br>

          <input type="Password" placeholder="Password" name="Password" required>
          <br>
          <br>

          <input type="Date" placeholder="Date of registration..." name="Date_of_register" required>
          <br>
          <br>
          <br>
    
          <p> Already have an account? <a href="login_form.php"> Log-in  </a> </p>

          <button class="btn btn_one""  ><big><b>Submit</b></big></button>
        
    </form> 
    
  </p>
</center>




