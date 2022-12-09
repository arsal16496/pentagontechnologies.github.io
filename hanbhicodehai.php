<?php

session_start();
$con = mysqli_connect("DESKTOP-M82HP5L" , "DESKTOP-M82HP5L\mak" , "" , "sir");





if(isset($_POST['save_date']))
{
    $naam= $_POST['a1'];
    $orderdo= $_POST['a2'];
    $email=$_POST['a3'];
    $number= $_POST['a4'];
    $gender= $_POST['a5'];
    $idcard= $_POST['a6'];
    
    
    $query = "INSERT INTO btao (naam,orderdo,email,number,gender,id_card) VALUES ('$naam','$orderdo','$email','$number','$gender','$idcard')";
    
    $query_run = mysqli_query($con, $query );
    
    
    
    
    
   if($query_run)
    {
        $_SESSION['status']= "<h6>  order successfully registered </h6>";
        header("location : hanbhacodehai");
    }
    
    else
    {
        $_SESSION['status']= "<h6>  register order again network error issue </h6>";
        header("location : hanbhacodehai");
    }
    }







?>