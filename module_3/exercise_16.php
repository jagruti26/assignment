<?php
$balances=array(
"ankit"=>array(
"a"=>6.5,
"b"=>5.5,
"c"=>4.5,
"d"=>5.5,
"e"=>5.5,
),
"ram"=>array(
"a"=>1.5,
"b"=>2.5,
"c"=>4.5,
"d"=>5.5,
"e"=>4.5,
),
"annop"=>array(
"a"=>6.5,
"b"=>5.5,
"c"=>0.5,
"d"=>2.5,
"e"=>3.5,
),
);
foreach($balances as $balance){
	echo $balance['a']." ".$balance['b']." ".$balance['c']." ".$balance['d']." ".$balance['e']."<br>";
}
?>


