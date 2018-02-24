<html>

<head>

<title>Add Resource</title>

</head>

<body>

<?php


if(isset($_POST['submit1'])) {


$data_missing = array();


if(empty($_POST['room_number'])) {

 //Adds anme to array

 $data_missing[] = 'room_number';

 } else {

     //Trim whitespace

     $r_number = trim($_POST['room_number']);

       }


   if(empty($_POST['capacity'])) {

       //Add name to array

        $data_missing[] = 'capacity';

   } else {

    //Trim whitespace

    $capacity = trim ($_POST['capacity']);

   }


   
    if (empty($data_missing)) {

        //this is a PATH to my connect file. I had to make it exact to make it work

        require_once('C:\Users\jbeea\Desktop\ASU\SER 322\Group 17 Final Project\mysqli_connect.php');


       $query = "INSERT INTO conference_room (room_number, capacity) VALUES (?, ?)";


        $stmt = mysqli_prepare($dbc, $query);


       /*i Integers

       d Doubles

       b Blobs

       s Everything Else*/


       mysqli_stmt_bind_param($stmt, "ii", $r_number, $capacity);


     mysqli_stmt_execute($stmt);

       $affected_rows = mysqli_stmt_affected_rows($stmt);


      if($affected_rows == 1) {

         echo 'Room Entered';

         mysqli_stmt_close($stmt);

         mysqli_close($dbc);

     } else {

       echo 'Error Occured<br/>';

          echo mysqli_error();

         mysqli_stmt_close($stmt);

          mysqli_close($dbc);

        }


     } else {

       echo 'You need to enter the following data<br/>';

       foreach($data_missing as $missing) {

         echo '$missing<br/>';

       }


      }


   //}

} //end IF isset


if(isset($_POST['submit2'])) {


$data_missing = array();


if(empty($_POST['device_id'])) {

 //Adds anme to array

 $data_missing[] = 'device_id';

 } else {

     //Trim whitespace

     $d_id = trim($_POST['device_id']);

       }


   if(empty($_POST['manufacturer'])) {

       //Add name to array

        $data_missing[] = 'manufacturer';

   } else {

    //Trim whitespace

    $manufacturer = trim ($_POST['manufacturer']);

   }


   
    if (empty($data_missing)) {

        //this is a PATH to my connect file. I had to make it exact to make it work

        require_once('C:\Users\jbeea\Desktop\ASU\SER 322\Group 17 Final Project\mysqli_connect.php');


       $query = "INSERT INTO laptop (device_id, manufacturer) VALUES (?, ?)";


        $stmt = mysqli_prepare($dbc, $query);


       /*i Integers

       d Doubles

       b Blobs

       s Everything Else*/


       mysqli_stmt_bind_param($stmt, "is", $d_id, $manufacturer);


     mysqli_stmt_execute($stmt);

       $affected_rows = mysqli_stmt_affected_rows($stmt);


      if($affected_rows == 1) {

         echo 'Laptop Entered';

         mysqli_stmt_close($stmt);

         mysqli_close($dbc);

     } else {

       echo 'Error Occured<br/>';

          echo mysqli_error();

         mysqli_stmt_close($stmt);

          mysqli_close($dbc);

        }


     } else {

       echo 'You need to enter the following data<br/>';

       foreach($data_missing as $missing) {

         echo '$missing<br/>';

       }


      }


   //}

} //end IF isset


if(isset($_POST['submit3'])) {


$data_missing = array();


if(empty($_POST['device_id'])) {

 //Adds anme to array

 $data_missing[] = 'device_id';

 } else {

     //Trim whitespace

     $d_id = trim($_POST['device_id']);

       }


   if(empty($_POST['lamp_hours'])) {

       //Add name to array

        $data_missing[] = 'lamp_hours';

   } else {

    //Trim whitespace

    $l_hours = trim ($_POST['lamp_hours']);

   }


   
    if (empty($data_missing)) {

        //this is a PATH to my connect file. I had to make it exact to make it work

        require_once('C:\Users\jbeea\Desktop\ASU\SER 322\Group 17 Final Project\mysqli_connect.php');


       $query = "INSERT INTO projector (device_id, lamp_hours) VALUES (?, ?)";


        $stmt = mysqli_prepare($dbc, $query);


       /*i Integers

       d Doubles

       b Blobs

       s Everything Else*/


       mysqli_stmt_bind_param($stmt, "ii", $d_id, $l_hours);


     mysqli_stmt_execute($stmt);

       $affected_rows = mysqli_stmt_affected_rows($stmt);


      if($affected_rows == 1) {

         echo 'Projector Entered';

         mysqli_stmt_close($stmt);

         mysqli_close($dbc);

     } else {

       echo 'Error Occured<br/>';

          echo mysqli_error();

         mysqli_stmt_close($stmt);

          mysqli_close($dbc);

        }


     } else {

       echo 'You need to enter the following data<br/>';

       foreach($data_missing as $missing) {

         echo '$missing<br/>';

       }


      }


   //}

} //end IF isset


?>

<form action = "http://localhost:8080/resourceadded.php" method = "post">


<b> Add a New Conference Room</b>


<p>Room Number:<input type = "text" name = "room_number" size = "30" value = "" />

</p>


<p>Capacity:
<input type = "text" name = "capacity" size = "30" value = "" />

</p>



<p>
<input type ="submit" name="submit1" value = "Send" />

</p>


</form>

<form action = "http://localhost:8080/resourceadded.php" method = "post">


<b> Add a New Laptop</b>


<p>Device ID:<input type = "text" name = "device_id" size = "30" value = "" />

</p>


<p>Manufacturer:
<input type = "text" name = "manufacturer" size = "30" value = "" />

</p>



<p>
<input type ="submit" name="submit2" value = "Send" />

</p>


</form>

<form action = "http://localhost:8080/resourceadded.php" method = "post">


<b> Add a New Projector</b>


<p>Device ID:<input type = "text" name = "device_id" size = "30" value = "" />

</p>


<p>Lamp Hours:
<input type = "text" name = "lamp_hours" size = "30" value = "" />

</p>



<p>
<input type ="submit" name="submit3" value = "Send" />

</p>


</form>



</body>

</html>
