














<?php SESSION_start();?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="order_ki.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>




      <?php
      
      
      if(isset($_SESSION['status']))
      {
        echo" <h4>" .$_SESSION['status']. "</h4>";
        unset($_SESSION['status']);
      }
      
      
      
      ?>












    <div class="container">
        <header>order registration</header>

        <form action="hanbhicodehai.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label >Full Name</label>
                            <input type="text" placeholder="Enter your name" required name="a1">
                        </div>

                       <div class="input-field">
                            <label> select order</label>
                            <select required  name="a2">
                                <option disabled selected>click your order</option>
                                <option>mobile application development</option>
                                <option>ios application development</option>
                                <option>website development</option>
                                <option>logo designing</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" required name="a3">
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" required name="a4">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="a5">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>id card number</label>
                            <input type="number" placeholder="Enter your id card no" required name="a6">
                        </div>
                        
                        
                     
                     
                   <button class="sumbit" name="save_date">
                            <span class="btnText"  >Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                       
                        
                        
                    </div>
                </div>

            
            </div>

           

                 
            
        </form>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 