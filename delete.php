<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','calendar');

	// prepare id from the url querystring to find the record
	$id = $_GET['id'];
	
	// prepare delete instruction
	$sql = "DELETE FROM birthdays WHERE id = $id";
	
	// execute delete instruction
	$connection->query($sql);

	if ($connection)
{
    header("Location: http://localhost/calendar/");
    exit;
}
?>