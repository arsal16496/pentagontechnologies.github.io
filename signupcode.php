<?php

session_start();
$con = mysqli_connect("localhost" , "root" , "" , "database_customer");





if(isset($_POST['save_date']))
{
    $email= $_POST['username'];
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];
    $mobile_number= $_POST['mobile_number'];
    $gender= $_POST['gender'];
    $dob = date('y-m-d' , strtotime($_POST['dateofbirth']));
    
    
    $query = "INSERT INTO demo(email,password,confirm_password,mobile_number,gender,dob) VALUES ('$email','$password','$confirm_password','$mobile_number','$gender','$dob')";
    
    $query_run = mysqli_query($con, $query );
    
    
    
    
    
   if($query_run)
    {
        $_SESSION['status']= "<h6> Date values inserted </h6>";
        header("location : signup.php");
    }
    
    else
    {
        $_SESSION['status']= "<h6>  Date values inserted failed </h6>";
        header("location : signup.php");
    }
    }







?>