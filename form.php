<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Money Calculator Form</title>
</head>

<body>

<h1>Money Calculator Form</h1>

<form action="form.php" method="post">

	<div class="numbers">
		<label for="num1">First Number</label>
		<input type="number" id="num1" name="num1">
	</div>
	
	<div id="function">
		<label for="function">Select a Mathematical Function</label>
		<select id="function" name="function">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
	</div>

	<div class="numbers">
		<label for="num2">Second Number</label>
		<input type="number" id="num2" name="num2">
	</div>
	
	<div id="button">
		<button type="submit">Calculate</button>
	</div>
</form>

	<div id="total"
		<?php if ($_POST['num1'] && $_POST['function'] && $_POST['num2']) : ?>
		
			<?php if ($_POST['function'] == '+') : ?>
			<?php $subtotal = $_POST['num1'] + $_POST['num2']; ?>
			
			<?php elseif ($_POST['function'] == '-') : ?>
			<?php $subtotal = $_POST['num1'] - $_POST['num2']; ?>
			
			<?php elseif ($_POST['function'] == '*') : ?>
			<?php $subtotal = $_POST['num1'] * $_POST['num2']; ?>
			
			<?php elseif ($_POST['function'] == '/') : ?>
			<?php $subtotal = $_POST['num1'] / $_POST['num2']; ?>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php $total = $subtotal * 1.13; ?>
		<p class="write-total"> <?php echo number_format ($total, 2); ?></p>

	</div>
	
</body> 
</html>