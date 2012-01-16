<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Money Calculator Form</title>
</head>

<body>

<form action="form.php" method="post">

	<label for="num1">First Number</label>
	<input type="number" id="num1" name="num1">
	
	<label for="num2">Second Number</label>
	<input type="number" id="num2" name="num2">
	
	<label for="function">Function</label>
	<select id="function" name="function">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>

	<button type="submit">Calculate</button>

</form>

<?php if ($_POST['function'] == '+') : ?>
		<p><strong><?php echo number_format(($_POST['num1'] + $_POST['num2']) * 1.13, 2); ?></strong></p>
<?php endif; ?>


</body>
</html>