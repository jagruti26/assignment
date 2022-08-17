<?php

echo "<h3>Marks of five Subjets are: </h3>";

$sub_1 = 70;
echo "Physics: ".$sub_1."<br>";

$sub_2 = 50;
echo "Chemistry: ".$sub_2."<br>";

$sub_3 = 65;
echo "Biology: ".$sub_3."<br>";

$sub_4 = 85;
echo "Mathematics: ".$sub_4."<br>";

$sub_5 = 79;
echo "Computer: ".$sub_5."<br><br>";

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

echo "The Total marks   = " . $total . "/500\n"."<br>";
echo "The Average marks = " . $average . "\n"."<br>";
echo "The Percentage    = " . $percentage . "%\n"."<br>";
echo "The Grade         = '" . $grade . "'\n";

?>