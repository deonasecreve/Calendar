<?php
	$monthName = array('0' => 'Onbekend', '1' => 'Januari','2' => 'Februari','3' => 'Maart','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Augustus','9' => 'September','10' => 'Oktober','11' => 'November','12' => 'December');
?>
<!doctype html>

<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
	</body>
</html>

<?php

    $connection = new mysqli('localhost','root','','calendar');

    if( ! $connection ) {
    	die('No connection: ' . mysqli_connect_error());
	}
   
	$sql = "SELECT * FROM birthdays ORDER BY month ASC";

	$result = $connection->query($sql);

	$birthdays = $result->fetch_all(MYSQLI_ASSOC);

	$lastMonth = '';

	foreach ($birthdays as $birthday) {
		if ($birthday['month'] != $lastMonth){
			echo '<h1>' . $monthName[$birthday['month']] . '</h1>';
		}
		echo '<h2>' . $birthday['day'] . '</h2>';
		$lastMonth = $birthday['month'];
		echo '<p><a href="edit.php?id=' . $birthday['id'] . '">' . $birthday['person'] . ' (' . $birthday['year'] . ')</a>' . '<a href="delete.php?id=' . $birthday['id'] . '">x</a>';
	}	
	echo '<p><a href="create.php">+ Toevoegen</a></p>';