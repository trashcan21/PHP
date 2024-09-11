<?php
$a = 10;
$b = 20;
$c = '10';

echo ('<br>');
echo ($a == $c) ? 'true' : 'false';
echo ("<br>");

echo ($a === $c) ? 'true' : 'false';
echo ("<br>");

echo ($a != $c) ? 'true' : 'false';
echo ("<br>");

echo ($a !== $c) ? 'true' : 'false';
echo ("<br>");

echo ($a > $c) ? 'true' : 'false';
echo ("<br>");

echo ($a < $c) ? 'true' : 'false';
echo ("<br>");

echo ($a >= $c) ? 'true' : 'false';
echo ("<br>");

echo ($a <= $c) ? 'true' : 'false'; 
echo ("<br>"); 
echo ("<br>");
?>



<?php
$marks = 85; 
if ($marks >= 90) {
    $grade = 'A';
} elseif ($marks >= 80) {
    $grade = 'B';
} elseif ($marks >= 70) {
    $grade = 'C';
} elseif ($marks >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "The grade for the marks of $marks is: $grade";
?>