<?php
function largest($x,$y,$z)
{
	$max=$x;
	$max=($x>$y)? (($x>$z)?$x:$z):(($y>$z)?$y:$z);

	echo "Largest number among $x, $y, $z is: $max";
}
largest(100,200,500);

?>