<html>

<head>
<title>Check Reservation</title>
</head>

<body bgcolor="#343234">

<font size="5" color="#CCE6A4">

<?php

if(isset($_POST['submit'])){

//require_once('../mysqli_connect.php')

  $dbc = mysqli_connect('localhost', 'group17', '', 'group17db');
  if (mysqli_connect_error())
      echo mysqli_connect_error();

    $type = trim($_POST['type']);
    $type =mysql_real_escape_string($type);
    $entered_time = trim($_POST['entered_time']);
    $entered_time = mysql_real_escape_string($entered_time);

    $query = "SELECT DISTINCT resource_id FROM resource WHERE type = '$type' AND IN
        (SELECT resource_id FROM resource WHERE reservation_id NOT IN
        (SELECT reservation_id FROM reservation_times WHERE
        reservedTime = '$entered_time'))";

    $response = @mysqli_query($con, $query);

    if($response){

        echo '<table align = "left" cellspacing="2" cellpadding="5"' .

        '<tr><td align="left"><b>Available Resources</b></td></tr>';

        while($row = mysqli_fetch_array($response)){

            echo '<tr><td align="left">' . $row[resource_id] . '</td></tr>';

        }

        echo '</table>';

    } else {

        echo "There are no available " . $type . "s for that time";

    }

    mysqli_close($con);

}

?>

</font>
</body>
</html>