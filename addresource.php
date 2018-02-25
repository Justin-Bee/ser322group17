<html>

<head>

<title>Add Resource</title>

</head>

<body bgcolor="#343234">

<font size="5" color="#CCE6A4">
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
</font>
</body>

</html>
