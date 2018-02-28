<?php
$servername = "localhost";
$username = "group17";
$password = "";
$dbname = "group17DB";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//CHeck Connection
if ($conn->connect_error) {
  die ("Connection Failed:" . $conn.connect_error);
}
$sql = "INSERT INTO resource (resource_id)";


$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Dell')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
    $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
  $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
  }

$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Acer')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
    $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
  }

$sql = "INSERT INTO laptop (manufacturer)
  VALUES ('Asus')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
  $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
else {
  echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
}

$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Dell')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
    $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
  }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('Apple')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
      $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
    }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('HP')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
      $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
    }

$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Toshiba')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
    $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
  }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('Apple')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
      $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
    }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('HP')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
      $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
    }

    $sql = "INSERT INTO laptop (manufacturer)
        VALUES ('Acer')";
    //CHeck laptop insertion
    if ($conn->query($sql) === TRUE) {
        $result = mysqli_insert_id($conn);
  $sql = "INSERT INTO resource (device_id, type)
    VALUES ('$result', 'laptop')";
  
  if($conn->query($sql)) {
    echo "Resource Added\n";
  }
    }
      else {
        echo "Error Creating Laptop Data: " . $sql . "\n" .  $conn->error;
      }

  $conn->close();
  ?>
