<?php

$servername = "localhost";
$username = "group17";
$password = "ser322";
$dbname = "group17DB";

//Create Connection to DB. DB must be specified
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn -> connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Create Employee Table (FOR SQL)
$sql = "CREATE TABLE employee (
  employee_id INT UNSIGNED NOT NULL PRIMARY KEY,
  first_name VARCHAR(30) NOT NULL,
  last_name VARCHAR(30) NOT NULL,
  phone_number VARCHAR(30)
)";

//Checking that Employee table was created
if ($conn->query ($sql) === TRUE ) {
    echo "Table Employee created successfully</br>";
}
  else {
    echo "Error Creating Employee table: " . $conn->error . "</br>";
  }





  //Create resource TABLE
  $sql = "CREATE TABLE resource (
    resource_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
  )";

  //CHecking Creation of resource table
  if ($conn->query ($sql) === TRUE) {
    echo "Table resource created successfully</br>";
  }else {
    echo "Error creating resource Table: " . $conn->error . "</br>";
  }





  //Create reservation TABLE
  $sql = "CREATE TABLE reservation (
    reservation_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    start_time VARCHAR(45),
    month VARCHAR(13),
    day INT UNSIGNED,
    year INT UNSIGNED,
    employee_id INT UNSIGNED NOT NULL,
    resource_id INT UNSIGNED NOT NULL,

    FOREIGN KEY (resource_id) REFERENCES resource (resource_id),

    FOREIGN KEY (employee_id) REFERENCES employee (employee_id)
  )";

  //CHecking Creation of reservation table
  if ($conn->query ($sql) === TRUE) {
    echo "Table reservation created successfully</br>";
  }
    else {
      echo "Error creating reservation Table: " . $conn->error . "</br>";
    }


//Create makes Table
$sql = "CREATE TABLE makes (
  employee_id INT UNSIGNED NOT NULL,
  reservation_id INT UNSIGNED NOT NULL,
  resource_id INT UNSIGNED NOT NULL,

  FOREIGN KEY (resource_id) REFERENCES resource (resource_id),
  FOREIGN KEY (employee_id) REFERENCES employee (employee_id),
  PRIMARY KEY (employee_id, resource_id)
)";

//Checking that makes table was created
if ($conn->query ($sql) === TRUE ) {
    echo "Table Makes created successfully</br>";
}
  else {
    echo "Error Creating Makes table: " . $conn->error . "</br>";
  }

  //Create Conference Room TABLE
  $sql = "CREATE TABLE conference_room (
      resource_id INT UNSIGNED NOT NULL,
      room_number INT UNSIGNED NOT NULL,
      capacity INT UNSIGNED,
      FOREIGN KEY (resource_id) REFERENCES resource (resource_id),
      PRIMARY KEY (resource_id, room_number)
  )";


  //CHeck Conference room table created
  if ($conn->query ($sql) === TRUE) {
    echo "Table Conference Room created successfully</br>";
  }
    else {
      echo "Error creating Conference Room Table: " . $conn->error . "</br>";
    }

  //Create laptop TABLE
  $sql = "CREATE TABLE laptop (
    resource_id INT UNSIGNED NOT NULL,
    device_id INT UNSIGNED NOT NULL,
    manufacturer VARCHAR(30),
    FOREIGN KEY (resource_id) REFERENCES resource(resource_id),
    PRIMARY KEY (resource_id, device_id)
  )";

  //CHecking Creation of laptop TABLE
  if ($conn->query ($sql) === TRUE) {
    echo "Table laptop created successfully</br>";
  }
    else {
      echo "Error creating laptop Table: " . $conn->error . "</br>";
    }

  //Create projector table
  $sql = "CREATE TABLE projector (
    resource_id INT UNSIGNED NOT NULL,
    device_id INT UNSIGNED NOT NULL,
    lamp_hours INT UNSIGNED,
    FOREIGN KEY (resource_id) REFERENCES resource(resource_id),
    PRIMARY KEY (resource_id, device_id)
  )";

  //Check Creation of projector table
  if ($conn->query ($sql) === TRUE) {
    echo "Table projector created successfully</br>";
  }
    else {
      echo "Error creatin projector Table: " . $conn->error . "</br>";
    }

  //Create reservation_times Table
  $sql = "CREATE TABLE reservation_times (
    reservation_id INT UNSIGNED NOT NULL,
    hour ENUM('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24') NOT NULL,

    FOREIGN KEY (reservation_id) REFERENCES reservation (reservation_id),
    PRIMARY KEY (reservation_id, hour)
  )";

  //CHeck creation of reservation_times Table
  if ($conn->query ($sql) === TRUE) {
    echo "Table reservation_times created successfully</br>";
  }
    else {
      echo "Error creating reservation_times Table: " . $conn->error . "</br>";
    }

  $conn->close();
?>
