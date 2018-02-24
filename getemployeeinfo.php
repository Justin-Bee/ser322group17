<?php

  //Get a connection for the database

  require_once('C:\Users\jbeea\Desktop\ASU\SER 322\Group 17 Final Project\mysqli_connect.php');


 // Create a query for the DB for an Employee

  $query = "SELECT first_name, last_name, phone_number

             FROM employee";


 //Get a response fomr the DB by sending the connection and $query

 $response = @mysqli_query($dbc, $query);


  //If the querty is executed properly process

  if($response) {


   echo '<table align = "left"

    cellspacing = "5" cellpadding = "8">


    <tr><td align = "left"> <b>First Name</b></td>

   <td align = "left"> <b>Last Name</b></td>

   <td align = "left"> <b>Phone Number</b></td></tr>';


  //mysqli_fetch_array will return a row of data from the $query

  //until no further data is available

  while($row = mysqli_fetch_array($response)) {

   echo '<tr> align = "left">' .

   $row['first_name'] . '</td><td align = "left">' .

    $row['last_name'] . '</td><td align = "left">' .

    $row['phone_number'] . '</td><td align = "left">';


    echo '</tr>';

  }


 echo '</table>';


} else {

  echo "Couldn\'t issue database query<br />";


 echo mysqli_error($dbc);

}


//Close connmection to the databasemysqli_close($dbc);

?>




}





  }
