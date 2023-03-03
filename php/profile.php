<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$servername = "localhost:4306";
$dbusername = "root"; // default username for XAMPP
$dbpassword = ''; // default password for XAMPP is empty
$dbname = "userdata"; // replace with your database name

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$user = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username'");


if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['passwordx']){
      echo "Login Successful<br>"; 
      echo "NAME:";
      echo $row['username'];
      echo"<br>";
      echo "EMAIL:";
      echo $row['email'];
      echo"<br>";
      echo "CONTACT:";
      echo $row['contact'];
      echo"<br>";
      echo "DOB:";
      echo $row['dob'];
      echo"<br>";
      echo "AGE:";
      echo $row['age'];
      echo"<br>";
      echo "DOMAIN:";
      echo $row['domain'];
      echo"<br>";
      echo "<button> <a href='./register.html'>reg</a></button>";
      exit;

    
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }


?>