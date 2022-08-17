<?php
function sum($numbers,$total)
{
	$sum=0;
	for($i=0;$i<$total;$i++)
	$sum+=$numbers[$i];
    return $sum;
}
$numbers=array(12,4,16,9,10);
$total=sizeof($numbers);
echo "Total of given array is: ",sum($numbers,$total);

?>