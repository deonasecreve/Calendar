<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','calendar');

	// prepare values to be inserted in table books in database
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	
	// prepare insert instruction
	$sql = "insert into birthdays (person, day, month, year) values('$person','$day', '$month', '$year')";
	
	// execute insert instruction
	$connection->query($sql);

	if ($connection)
{
    header("Location: http://localhost/calendar/");
    exit;
}
?>