<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Style.css">
<meta charset="UTF-8">
<head>
<body>
	<form method="POST" action="">
		<input class="a1" type="text" value="" name="number1"></input>
			<select name="act" >
				<option value="/">/</option>
				<option value="*">*</option>
				<option value="-">-</option>
				<option value="+">+</option>
				<option value="Sqr">Sqr</option>
				<option value="Pwr">Pwr</option>
			</select>
		<br><input class="a1" type="text" value="" name="number2"></input>
		<input type="submit" value="calc" name="btn"></input>
	</form>
<h1>
	<?php
	echo calc();
	?>
</h1>
</body>
</head>
	<!-- <form action="index.php" method="POST">
	<p align="center">Значение 1: <input type="text" name="firstnumber"></p>
	<p align="center">Значение 2: <input type="text" name="secondnumber"></p>
	<p align="center"><input type="submit" value="Отправить" =""></p>	
	</form> -->