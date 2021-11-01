<?php
$con = mysqli_connect('localhost','root','','travel_db');
//check connection
if($con === false){
                   die("ERROR: Could not connect. " . mysqli_connect_error());
        }
if(isset($_POST["confirm"]))
{
     $fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$destination = $_POST["destination"];
  
       $sql = " INSERT INTO guests (fname,lname,email,destination ) VALUE ('$fname','$lname','$email','$destination') "; 
         if(mysqli_query($con, $sql)){
          echo "Records inserted successfully.";
         } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
          }
     
    
        header('location:index.html');
    // Close connection
    mysqli_close($link);
  
}

?>