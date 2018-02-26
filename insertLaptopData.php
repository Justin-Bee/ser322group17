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

$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Dell')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
  echo "New Laptop created successfully<br>";
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
  }

$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Acer')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
  echo "New Laptop created successfully<br>";
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
  }

$sql = "INSERT INTO laptop (manufacturer)
  VALUES ('Asus')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
echo "New Laptop created successfully<br>";
}
else {
  echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
}

$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Dell')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
  echo "New Laptop created successfully<br>";
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
  }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('Apple')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
    echo "New Laptop created successfully<br>";
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
    }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('HP')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
    echo "New Laptop created successfully<br>";
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
    }

$sql = "INSERT INTO laptop (manufacturer)
    VALUES ('Toshiba')";
//CHeck laptop insertion
if ($conn->query($sql) === TRUE) {
  echo "New Laptop created successfully<br>";
}
  else {
    echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
  }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('Apple')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
    echo "New Laptop created successfully<br>";
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
    }

  $sql = "INSERT INTO laptop (manufacturer)
      VALUES ('HP')";
  //CHeck laptop insertion
  if ($conn->query($sql) === TRUE) {
    echo "New Laptop created successfully<br>";
  }
    else {
      echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
    }

    $sql = "INSERT INTO laptop (manufacturer)
        VALUES ('Acer')";
    //CHeck laptop insertion
    if ($conn->query($sql) === TRUE) {
      echo "New Laptop created successfully<br>";
    }
      else {
        echo "Error Creating Laptop Data: " . $sql . "<br>" .  $conn->error;
      }

  $conn->close();
  ?>
