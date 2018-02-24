<?php

$servername = "localhost";

$username = "group17";

$password = "ser322";


//Create connection

$conn = new mysqli($servername, $username, $password);
//Check connection

if ($conn ->connect_error) {
  
die("Connection Failed: " . $conn -> connect_error);

}


//Create Database

$sql = "CREATE DATABASE group17DB";
 
 if($conn->query($sql) === TRUE)
 {
 
   echo "Database created successfully";

  }
  else {
 
   echo "Error Creating Database: " . $conn->error;

  }

 
 $conn->close();
 
 ?>