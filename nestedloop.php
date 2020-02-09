<?php

for($i=1; $i<=3;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo"*";
	}
	echo "</br>";
}

echo "</br>";

for($i=3; $i>=1;$i--)
{
	for($j=$i;$j>=1;$j--)
	{
		echo"$j";
	}
	echo "</br>";
}

echo "</br>";
$x="A";
for($i=1; $i<=3;$i++)
{
	for($j=1;$j<=$i;$j++)
	{   
		echo"$x";
		$x++;

	}
	echo "</br>";
}


?>