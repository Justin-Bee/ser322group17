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

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (101,50)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (room_number, type)
    VALUES (101, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (102,50)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (102, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (110,85)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (110, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (115,25)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (room_number, type)
    VALUES (115, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (116,25)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (116, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (117,25)";



if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (117, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (120,50)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (120, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (210,100)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (210, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (220,25)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (220, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (221,25)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (221, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (222,25)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (222, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (223,25)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (223, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (224,25)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
    $sql = "INSERT INTO resource (device_id, type)
    VALUES (224, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO conference_room (room_number, capacity)
    VALUES (225,50)";

if ($conn->query($sql) === TRUE) {
  echo "New Room created successfully\n";
  $sql = "INSERT INTO resource (device_id, type)
    VALUES (225, 'conference_room')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
    echo "Error Creating Room Data: " . $sql . "\n" .  $conn->error;
}

$conn->close();
?>
