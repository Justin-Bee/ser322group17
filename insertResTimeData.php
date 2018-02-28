<?php
$servername = "localhost";
$username = "group17";
$password = "ser322";
$dbname = "group17DB";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//CHeck Connection
if ($conn->connect_error) {
  die ("Connection Failed:" . $conn.connect_error);
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
    VALUES (1,'8')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
  echo "New chunk created successfully\n";
} else {
    echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
      VALUES (1,'9')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
    echo "New chunk created successfully\n";
  } else {
      echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
        VALUES (1,'10')";
    //CHeck laptop insertion
    if ($conn->query($sql) === TRUE) {
      echo "New chunk created successfully\n";
    } else {
        echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
        VALUES (1,'11')";
          //CHeck laptop insertion
    if ($conn->query($sql) === TRUE) {
        echo "New chunk created successfully\n";
    } else {
        echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
    VALUES (2,'12')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
  echo "New chunk created successfully\n";
} else {
    echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
      VALUES (2,'13')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
    echo "New chunk created successfully\n";
  } else {
      echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
        VALUES (101,'10')";
    //CHeck laptop insertion
    if ($conn->query($sql) === TRUE) {
      echo "New chunk created successfully\n";
    } else {
        echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO reservation_times (reservation_id,hour)
        VALUES (210,'14')";
          //CHeck laptop insertion
    if ($conn->query($sql) === TRUE) {
        echo "New chunk created successfully\n";
    } else {
        echo "Error Creating chunk Data: " . $sql . "\n" .  $conn->error;
}


$conn->close();
?>