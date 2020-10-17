<?php include 'header.php'; ?>



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
							    <option value="covid19">COVID-19</option>
                                
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


