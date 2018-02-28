<?php
$servername = "localhost";
$username = "group17";
$password = "";
$dbname = "group17DB";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if ($conn->connect_error) {
  die ("Connection Failed:" . $conn.connect_error);
}

$sql = "INSERT INTO reservation (start_time,month,day,year,employee_id,resource_id)
    VALUES ('1:00pm','March','27','2018',1,1)";

if ($conn->query($sql) === TRUE) {
  echo "New Reservation created successfully\n";
} else {
    echo "Error Creating Reservation Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation (start_time,month,day,year,employee_id,resource_id)
    VALUES ('12:00pm','March','27','2018',2,2)";

if ($conn->query($sql) === TRUE) {
  echo "New Reservation created successfully\n";
} else {
    echo "Error Creating Reservation Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation (start_time,month,day,year,employee_id,resource_id)
    VALUES ('8:00am','March','27','2018',3,3)";

if ($conn->query($sql) === TRUE) {
  echo "New Reservation created successfully\n";
} else {
    echo "Error Creating Reservation Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation (start_time,month,day,year,employee_id,resource_id)
    VALUES ('9:00am','March','27','2018',4,4)";

if ($conn->query($sql) === TRUE) {
  echo "New Reservation created successfully\n";
} else {
    echo "Error Creating Reservation Data: " . $sql . "\n" .  $conn->error;
}

$conn->close();
?>
