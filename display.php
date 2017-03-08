<?php
    $connection = new mysqli('localhost','root','','calendar');

    $sql = "SELECT * FROM birthdays ORDER BY birthday ASC";
    
    $result = $connection->query($sql);

    $birthdayList = $result->fetch_all(MYSQLI_ASSOC);
?>


<!doctype html>

<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
        <table>
<?php
	foreach($birthdayList as $birthdays){
?>
    <tr>
		<td><?php echo $birthdays['person'];?></td>
		<td><?php echo $birthdays['day'];?></td>
        <td><?php echo $birthdays['month'];?></td>
        <td><?php echo $birthdays['year'];?></td>
	</tr>
<?php																			
	}
?>
	</table>
</body>
</html>