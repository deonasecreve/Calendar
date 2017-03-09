<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','calendar');
	
	
	// prepare id from the url querystring to find the record
	$id = $_GET['id'];
	
	// prepare query to select data from the table books for id 
	$sql = "SELECT * FROM birthdays WHERE id = $id";
	
	// execute the query 
	$result = $connection->query($sql);
	
	// fetch selected book to store in variable: book
	$birthdays = $result->fetch_assoc();
?>
<!doctype html>
<html>
<body>
	<form action="update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $birthdays['id']; ?>"><br>
		
		<label for="person">Person:</label><br>
		<input name="person" value="<?php echo $birthdays['person']; ?>"><br>
		<br>

		<label for="day">Day:</label><br>
		<select name ="day" value="<?php echo $birthdays['day']; ?>">
  			<option value="1">1</option>
  			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
  			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
  			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
  			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select><br>
		<br>

		<label for="month">Month:</label><br>
		<select name = "month" value="<?php echo $birthdays['month']; ?>"><br>
  			<option value="1">Januari</option>
  			<option value="2">Februari</option>
			<option value="3">Maart</option>
			<option value="4">April</option>
			<option value="5">Mei</option>
  			<option value="6">Juni</option>
			<option value="7">Juli</option>
			<option value="8">Augustus</option>
			<option value="9">September</option>
  			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select><br>
		<br>

		<label for="year">Year:</label><br>
		<input name="year" value="<?php echo $birthdays['year']; ?>"><br>

		<input type="submit" name="submit" value="save">
	</form>
</body>
</html>