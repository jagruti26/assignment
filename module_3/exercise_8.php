<?php
for($row=0;$row<5;$row++)
{
	for($column=0;$column<7;$column++)
	{
		if($column==1 or (($row==0 or $row==6) and ($column>1 and $column<6)) or ($row==4 and $column>1 and $column<6))
			echo "*";
		else
			echo " ";
	}
	echo "<br>";

}
?>


