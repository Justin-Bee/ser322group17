<?php


$servername = "localhost";

$username = "group17";

$password = "ser322";

$dbname = "group17DB";


//Create Connection to DB. DB must be specified

$conn = new mysqli($servername, $username, $password, $dbname);


//Check connection

if ($conn -> connect_error)
 {

 die("Connection failed: " . $conn->connect_error);

}


//Create Employee Table (FOR SQL)

$sql = "CREATE TABLE employee (
  employee_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

  first_name VARCHAR(30) NOT NULL,

  last_name VARCHAR(30) NOT NULL,
 
 phone_number VARCHAR(30)
)";


//Checking that Employee table was created

if ($conn->query ($sql) === TRUE ) {
  
  echo "Table Employee created successfully\n";

}
  else {
 
   echo "Error Creating Employee table: " . $conn->error;
 
 }

 
 //Create Conference Room TABLE
  
$sql = "CREATE TABLE conference_room (

      room_number INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

      capacity INT UNSIGNED
  )";


  //CHeck Conference room table created

  if ($conn->query ($sql) === TRUE) {

    echo "Table Conference Room created successfully\n";

  }
    else {

      echo "Error creating Conference Room Table: " . $conn->error;

    }


  //Create laptop TABLE

  $sql = "CREATE TABLE laptop (
    device_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    manufacturer VARCHAR(30)
  )";

 
 //CHecking Creation of laptop TABLE

  if ($conn->query ($sql) === TRUE) {

    echo "Table laptop created successfully\n";
 
}
else {
 
     echo "Error creating laptop Table: " . $conn->error;

    }

 
 //Create projector table

  $sql = "CREATE TABLE projector (

    device_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    lamp_hours INT UNSIGNED
  )";


  //Check Creation of projector table

  if ($conn->query ($sql) === TRUE) {

    echo "Table projector created successfully\n";

  }
    else {
 
     echo "Error creatin projector Table: " . $conn->error;

    }


  //Create resource TABLE

  $sql = "CREATE TABLE resource (

    resource_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
  )";


  //CHecking Creation of resource table
 
 if ($conn->query ($sql) === TRUE) {

    echo "Table resource created successfully\n";

  }else {
 
   echo "Error creating resource Table: " . $conn->error;
 
 }


  //Create reservation TABLE

  $sql = "CREATE TABLE reservation (

    employee_id INT UNSIGNED NOT NULL,
    resource_id INT UNSIGNED NOT NULL,
    
    month VARCHAR(13),
    day INT UNSIGNED, 
    year INT UNSIGNED, 
    start_time VARCHAR(45),
    chunks VARCHAR(45),

    FOREIGN KEY (resource_id) REFERENCES resource (resource_id),
    FOREIGN KEY (employee_id) REFERENCES employee (employee_id),
    
    PRIMARY KEY (employee_id, resource_id)
  )";


 //Checking Creation of reservation table

  if ($conn->query ($sql) === TRUE) {

    echo "Table reservation created successfully\n";

  }
    else {
 
     echo "Error creating reservation Table: " . $conn->error;

    }


  $conn->close();

?>
