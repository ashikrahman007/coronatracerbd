<?php include 'header.php'; ?>


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

            <button class="btn btn_one"><b>Submit</b></button>
          
      </form> 
      
    </p>
  </center>


