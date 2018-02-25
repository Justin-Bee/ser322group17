<html>

<head>

<title>Add Employee</title>

</head>

<body bgcolor="#343234">

<font size="5" color="#CCE6A4">
<?php


if(isset($_POST['submit'])) {


$data_missing = array();


if(empty($_POST['first_name'])) {

 //Adds anme to array

 $data_missing[] = 'First Name';

 } else {

     //Trim whitespace

     $f_name = trim($_POST['first_name']);

       }


   if(empty($_POST['last_name'])) {

       //Add name to array

        $data_missing[] = 'Last Name';

   } else {

    //Trim whitespace

    $l_name = trim ($_POST['last_name']);

   }


   if(empty($_POST['phone_number'])) {

    //adds number to array

     $data_missing[] = 'phone_number';

    } else {

     //Trim whitespace

     $p_number = trim ($_POST['phone_number']);

    }


   if(empty($_POST['employee_id'])) {

      //adds number to array

     $data_missing[] = 'employee_id';

   } else {

   //Trim whitespace

    $e_id = trim ($_POST['employee_id']);

    }


    if (empty($data_missing)) {

        //this is a PATH to my connect file. I had to make it exact to make it work

        require_once('C:\Users\jbeea\Desktop\ASU\SER 322\Group 17 Final Project\mysqli_connect.php');


       $query = "INSERT INTO employee (first_name, last_name, phone_number, employee_id) VALUES (?, ?, ?, ?)";


        $stmt = mysqli_prepare($dbc, $query);


       /*i Integers

       d Doubles

       b Blobs

       s Everything Else*/


       mysqli_stmt_bind_param($stmt, "sssi", $f_name, $l_name, $p_number, $e_id);


     mysqli_stmt_execute($stmt);

       $affected_rows = mysqli_stmt_affected_rows($stmt);


      if($affected_rows == 1) {

         echo 'Employee Entered';

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


<form action = "http://localhost:8080/employeeadded.php" method="post">

  <b>Add a New Employee</b>


  <p>First Name:
  <input type="text" name = "first_name" size = "30" value = "" />

 </p>


 <p>Last Name:
  <input type="text" name = "last_name" size = "30" value = "" />

  </p>


 <p>Phone Number:
  <input type="text" name = "phone_number" size = "30" value = "" />

 </p>


  <p>Employee ID:
  <input type="text" name = "employee_id" size = "30" value = "" />

  </p>



 <p>
    <input type = "submit" name ="submit" value ="Send" />

 </p>

</form>

</font>
</body>

</html>
