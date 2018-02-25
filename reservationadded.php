<html>

<head>

<title>Make Reservation</title>

</head>

<body bgcolor="#343234">

<font size="5" color="#CCE6A4">
<?php


if(isset($_POST['submit'])) {


$data_missing = array();


if(empty($_POST['employee_id'])) {

 //Adds anme to array

 $data_missing[] = 'employee_id';

 } else {

     //Trim whitespace

     $e_id = trim($_POST['employee_id']);

       }


   if(empty($_POST['resource_id'])) {

       //Add name to array

        $data_missing[] = 'resource_id';

   } else {

    //Trim whitespace

    $r_id = trim ($_POST['resource_id']);

   }


   if(empty($_POST['month'])) {

    //adds number to array

     $data_missing[] = 'month';

    } else {

     //Trim whitespace

     $month = trim ($_POST['month']);

    }


   if(empty($_POST['day'])) {

      //adds number to array

     $data_missing[] = 'day';

   } else {

   //Trim whitespace

    $day = trim ($_POST['day']);

    }


if(empty($_POST['year'])) {

      //adds number to array

     $data_missing[] = 'year';

   } else {

   //Trim whitespace

    $year = trim ($_POST['year']);

    }


if(empty($_POST['start_time'])) {

      //adds number to array

     $data_missing[] = 'start_time';

   } else {

   //Trim whitespace

    $s_time = trim ($_POST['start_time']);

    }


if(empty($_POST['chunks'])) {

      //adds number to array

     $data_missing[] = 'chunks';

   } else {

   //Trim whitespace

    $chunks = trim ($_POST['chunks']);

    }


    if (empty($data_missing)) {

        //this is a PATH to my connect file. I had to make it exact to make it work

        require_once('C:\Users\jbeea\Desktop\ASU\SER 322\Group 17 Final Project\mysqli_connect.php');


       $query = "INSERT INTO reservation (employee_id, resource_id, month, day, year, start_time, chunks) VALUES (?, ?, ?, ?, ?, ?, ?)";


        $stmt = mysqli_prepare($dbc, $query);


       /*i Integers

       d Doubles

       b Blobs

       s Everything Else*/


       mysqli_stmt_bind_param($stmt, "iisiiss", $e_id, $r_id, $month, $day, $year, $s_time, $chunks);


     mysqli_stmt_execute($stmt);

       $affected_rows = mysqli_stmt_affected_rows($stmt);


      if($affected_rows == 1) {

         echo 'Reservation Entered';

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


<form action = "http://localhost:8080/reservationadded.php" method = "post">


<b> Make Reservation</b>


<p>Employee ID:
<input type = "text" name = "employee_id" size = "30" value = "" />

</p>


<p>Resource ID:
<input type = "text" name = "resource_id" size = "30" value = "" />

</p>


<p>Month:
<input type = "text" name = "month" size = "30" value = "" />

</p>


<p>Day:
<input type = "text" name = "day" size = "30" value = "" />

</p>
<p>Year:
<input type = "text" name = "year" size = "30" value = "" />

</p>
<p>Start Time:
<input type = "text" name = "start_time" size = "30" value = "" />

</p>
<p>Chunks:
<input type = "text" name = "chunks" size = "30" value = "" />

</p>


<p>
<input type ="submit" name="submit" value = "Send" />

</p>


</form>

</font>
</body>

</html>
