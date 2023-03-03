<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$domain = $_POST['domain'];
$servername = "localhost:4306";
$dbusername = "root"; // default username for XAMPP
$dbpassword = ''; // default password for XAMPP is empty
$dbname = "userdata"; // replace with your database name

  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    
  
    // insert user into database
    $insert_user_query = "INSERT INTO register VALUES ('$username', '$password', '$email', '$dob', '$age', '$contact', '$domain')";
    if($conn->query($insert_user_query)){
      echo "Registration successful";
      echo "<script> location.href='login.html'; </script>";
      exit;


    }else{
      echo "Error: " . $insert_user_query . "<br>" . $conn->error;
    }
  
  
  // close database connection
  $conn->close();
//Make database operations and insert the email value in the database. If insert operation is successful echo "You are subscribed." else "Something went wrong. Try again.".
//I am assuming that the operation is successful and so returning the "You are subscribed." message back to jQuery AJAX method.
echo " for " . $username ;

?>