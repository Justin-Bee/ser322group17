<html>
<head>
<title>Search Conference Rooms</title>
</head>
<body>
<?php

  //Get a connection for the database

  //require_once('C:\xampp\htdocs\mysqli_connect.php');

  $dbc = mysqli_connect('localhost', 'group17', '', 'group17db');
  if (mysqli_connect_error())
      echo mysqli_connect_error();

 $query = "SELECT room_number, capacity
             FROM conference_room";


 //Get a response fomr the DB by sending the connection and $query

 $response = @mysqli_query($dbc, $query);


  //If the querty is executed properly process

  if($response) {


   echo '<table align = "left"

    cellspacing = "5" cellpadding = "8">


    <tr><td align = "left"> <b>Conference Room</b></td>

   <td align = "left"> <b>Capacity</b></td>
</tr>';


  //mysqli_fetch_array will return a row of data from the $query

  //until no further data is available

  while($row = mysqli_fetch_array($response)) {

   echo '<tr align = "left"><td>' .

   $row['room_number'] . '</td><td align = "left">' .

    $row['capacity'] . '</td><td align = "left">' ;


    echo '</tr>';

  }


 echo '</table>';


} else {

  echo "Couldn\'t issue database query<br />";


 echo mysqli_error($dbc);

}

//Close connmection to the database
mysqli_close($dbc);

?>

<!--I wanted to add an ability to go back with a button, but it doesn't look very clean..-->

</td>
</tr>
      <tr>
        <td>
          <a href="http://localhost:8080/query_menu.php">
            <font size="5" color="#CCE6A4"> Go Back </font>
          </a>
        </td>
      </tr>

</table>
</body>
</html>