<?php
$num=407;
$total=0;
$x=$num;
while($x!=0)
{
	$rem=$x%10;
	$total=$total+$rem*$rem*$rem;
	$x=$x/10;
}
if($num==$total)
{
	echo "Yes it is an Armstrong Number";
}
else
{
	echo "No is is not an Armstrong Number";
}

?>