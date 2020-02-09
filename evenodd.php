<!DOCTYPE html>
<html>
<head>
	<title>Even Odd</title>
</head>
<body>

	<form method="post">
		Give a Number: <input type="number" name="Number">
		<br>
		<br>
		<input type="submit" name="submit">
		<br>

		<?php
		$v=$_POST['Number'];
		if($v%2==0)
		{
			echo "It's an even number";
		}
		else
		{
			echo "It's an odd number";
		}

		?>
	</form>


</body>
</html>