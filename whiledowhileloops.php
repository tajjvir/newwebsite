<?php include 'header.php'?>

<h1>While and Do While Loops</h1>

<?php

//infinite loop
//$grade = 0;

//while($grade < 10){
//	echo '<p>I AM LESS THAN 10!</p>';
//}

 ?>

<?php

//Pre-Condition loop
$grade = 0;

while($grade < 10){
	echo '<p>I AM LESS THAN 10!</p>';

	$grade++;
}
echo "EXIT LOOP";

 ?>

<?php

//Post-Condition loop
$grade = 0;

do {
	echo '<p>I AM LESS THAN 10!</p>';
	$grade++;
} while ($grade <= 10);

echo "EXIT LOOP";

 ?>

<?php require 'footer.php' ?>