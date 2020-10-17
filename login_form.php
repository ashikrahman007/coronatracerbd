<?php include 'header.php'; ?>
  
  <center> 
    <p>
        <form action="login_link.php" method="post">

                <h1> User Login </h1>
                <br>
           
                <input type="text" placeholder="User Email" name="Email" required>
                <br>
                <br>

                <input type="Password" placeholder="User Password" name="Password" required>
                <br>
                <br>

                 User type :  <select name="User_type">
                      <option value="Patient" > Patient</option>
                      <option value="Staff"> Staff</option>
                      <option value="Pathologist"> Pathologist</option>
                      <option value="Admin"> Admin</option>
                  </select>
                  <br>
                  <br>

                *Only for Pathologist : <select name="Pathologist_type">
                      <option value="None"> None</option>
					            <option value="covid19">COVID-19</option>
                     
                </select>
                <br>

                <button class="btn btn_one"  name="Login" ><big><b>Login</b></big></button>

                <div class="new-account"> Don't have an account yet? <a href="patient_registration_form.php">Create an account</a> </div>

         </form> 
      </p> 
    </center>