<!DOCTYPE html>
<html>
<head>
	<title>VAT</title>
</head>
<body>

	<form method="post">
		Amount: <input type="number" name="Amount">
		<br>
		<br>
		<input type="submit" name="submit">
		<br>

		<?php
		$v=$_POST['Amount'];
		$s=($v*(3/20));
		$total=$v+$s;
		echo"<br>";
		echo "Total amount after adding vat is: $total";
		?>

	</form>


</body>
</html>