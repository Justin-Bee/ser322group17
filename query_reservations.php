<html>

<title> Check Availability </title>
<body>

<head>
	<body bgcolor="#343234">
		<hi align="center">
			<font size="7" color="#CCE6A4">
				Please enter a resource type and the time in hours
			</font>
		</hi><br><br><br>

		<form action="http://localhost:8080/checkReservation.php" method="post">
			<p><font color="#CCE6A4">Enter a resource type (room,projector,laptop) </font>
			<input type="text" name="type" size="30" value="" />
			</p>
			<br><br>

			<p><font color="#CCE6A4">Enter a time in hours (1-24)</font>
			<input type="text" name="entered_time" size="30" value="" />
			</p>

			<p>
				<input type="submit" name="submit" value="Submit"/>
			</p>
			
		</form>

			<br><br><br>

			<a href="http://localhost:8080/query_menu.php">
						<font size="5" color="#CCE6A4"> Go Back </font>
			</a>
	</body>
</head>










</body>

</html>