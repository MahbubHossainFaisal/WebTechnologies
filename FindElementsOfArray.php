<!DOCTYPE html>
<html>
<head>
	<title>Finding element</title>
</head>
<body>

	<form method="post">
		Element <input type="number" name="Element">
		<br>
		<input type="submit" name="submit">
	</form>

		<?php
		
		$x=$_POST['Element'];
		
		$numbers = array("2","4","6","8","10");
		for($i=1; $i<=5; $i++)
		{
			if($x==$numbers[$i])
			{
				echo "Element Found!!!";
				break;
			}
			if($i==5)
		{
			echo"Not Found";
			break;
		}
		}


		?>
	</form>


</body>
</html>