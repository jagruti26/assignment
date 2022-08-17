<?php
function isLeap($year)
{
	return(date('L',mktime(0,0,0,1,1,$year))==1);
}
for($year=1901;$year<2017;$year++) 
{
	if(isLeap($year))
	{
		echo "$year: Leap Year<br/>";
	}	
	else
	{
		echo "$year: Not Leap Year<br/>";
	}
}

?>