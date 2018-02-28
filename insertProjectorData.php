<?php
$servername = "localhost";
$username = "group17";
$password = "";
$dbname = "group17db";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if ($conn->connect_error) {
  die ("Connection Failed:" . $conn.connect_error);
}

$sql = "INSERT INTO projector (lamp_hours)
    VALUES (1125)";

if ($conn->query($sql) === TRUE) {
  echo "New Projector created successfully\n";
  $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'projector')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }

}
else {
    echo "Error Creating Projector Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO projector (lamp_hours)
    VALUES (2114)";

if ($conn->query($sql) === TRUE) {
  echo "New Projector created successfully\n";
    $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'projector')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Projector Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO projector (lamp_hours)
    VALUES (598)";

if ($conn->query($sql) === TRUE) {
  echo "New Projector created successfully\n";
    $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'projector')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Projector Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO projector (lamp_hours)
    VALUES (8555)";

if ($conn->query($sql) === TRUE) {
  echo "New Projector created successfully\n";
  $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'projector')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Projector Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO projector (lamp_hours)
    VALUES (0)";

if ($conn->query($sql) === TRUE) {
  echo "New Projector created successfully\n";
    $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'projector')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Projector Data: " . $sql . "\n" .  $conn->error;
}

$conn->close();
?>
