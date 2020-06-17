<?php
	
	$value = 0;

	if (isset($_POST['conversionType'])) {
		$conversionType = $_POST['conversionType'];
	}
	if (isset($_POST['value'])) {
		$value = $_POST['value'];
	}
	
	if ($conversionType = 'Celsius') {
		$conversion = ($value * (9/5)) + (32);
		$roundedConversion = round($conversion , 2, PHP_ROUND_HALF_UP);
	}
	if ($conversionType = 'Fahrenheit') {
		$conversion = ($value - 32) * (5/9);
		$roundedConversion = round($conversion , 2, PHP_ROUND_HALF_UP);
	}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Unit Converter</title>
</head>
<body>
	<form action="UnitConverter.php" method="post">
		<p><select name="conversionType">
			<option>
				Select
			</option>
			<option value="Celsius">
				Celsius
			</option>
			<option value=" Fahrenheit">
				 Fahrenheit
			</option>
		</select></p>
		<p>Enter in Value <input type="text" name="value"></p>
		<input type="submit">
		<p>Converted Temperature: <?php echo $roundedConversion; ?></p>
	</form>
</body>
</html>
