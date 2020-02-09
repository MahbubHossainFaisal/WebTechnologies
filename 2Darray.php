<?php

$x=array(array(1,2,3,4),array('A','B','C','D'));

for($i=0;$i<2;$i++)
{
	for($j=0;$j<4;$j++)
	{
		echo"$x[$i][$j]";
	}
	echo "</br>";
}

?>