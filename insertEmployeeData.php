<?php
$servername = "localhost";
$username = "group17";
$password = "";
$dbname = "group17DB";


//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//CHeck connection
if ($conn -> connect_error) {
  die ("Connection failed: " . $conn->connect_error);
}

//Attempts to insert data into DB
$sql = "INSERT INTO employee (first_name, last_name, phone_number)
  VALUES ('John', 'Hargraves', '555-555-0001')";

  //Testing to check entry of data
  if ($conn->query($sql) === TRUE) {
    echo "New Employee Created successfully <br>";
  }
    else {
      echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
    }

    $sql = "INSERT INTO employee (first_name, last_name, phone_number)
      VALUES ('Mary', 'Baker', '555-555-0002')";

      //Testing to check entry of data
      if ($conn->query($sql) === TRUE) {
        echo "New Employee Created successfully<br>";
      }
        else {
          echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
        }

    $sql = "INSERT INTO employee (first_name, last_name, phone_number)
      VALUES ('Rufus', 'Candy', '555-555-0021')";

      //Testing to check entry of data
      if ($conn->query($sql) === TRUE) {
        echo "New Employee Created successfully<br>";
      }
        else {
          echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
        }

      $sql = "INSERT INTO employee (first_name, last_name, phone_number)
        VALUES ('Rupert', 'Long', '555-555-0003')";

        //Testing to check entry of data
        if ($conn->query($sql) === TRUE) {
          echo "New Employee Created successfully<br>";
        }
          else {
            echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
          }

      $sql = "INSERT INTO employee (first_name, last_name, phone_number)
        VALUES ('Larry', 'Winston', '555-555-0004')";

        //Testing to check entry of data
        if ($conn->query($sql) === TRUE) {
          echo "New Employee Created successfully<br>";
        }
          else {
            echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
          }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Charles', 'Grimes', '555-555-0005')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Ali', 'Johnson', '555-555-0006')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Meg', 'Carlin', '555-555-0007')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Michael', 'Sweeney', '555-555-0008')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Luke', 'Robertson', '555-555-0009')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Murray', 'Wheelhouse', '555-555-0010')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Leah', 'Jones', '555-555-0011')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Joshua', 'Combes', '555-555-0012')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('John', 'Patricia', '555-555-0013')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Marcus', 'Peters', '555-555-0014')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Penny', 'Warhol', '555-555-0015')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Clarissa', 'Henderson', '555-555-0016')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('George', 'Costanza', '555-555-0017')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Vincent', 'Vega', '555-555-0018')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Mia', 'Wallace', '555-555-0019')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

        $sql = "INSERT INTO employee (first_name, last_name, phone_number)
          VALUES ('Butch', 'Boxer', '555-555-0020')";

          //Testing to check entry of data
          if ($conn->query($sql) === TRUE) {
            echo "New Employee Created successfully<br>";
          }
            else {
              echo "Error Creating Employee: " . $sql . "<br>" . $conn->error;
            }

    $conn->close();
    ?>
