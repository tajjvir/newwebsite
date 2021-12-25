<?php include 'header.php'?>

	<h3>IF Statement Practice</h3>



	<?php
	$score = 50;

	if($score >= 50){
	echo  "<h3 style='color: green'>You have been passed!</h3>";
}
	else{
	echo "<h3 style='color: red'>You have been failed!</h3>";
}

	?>

	<?php

	$grade = 'B';

	if($grade == 'A'){
		echo "<h3>You are doing great!</h3>";
	}
	elseif($grade == 'B'){
		echo "<h3>You are doing good!</h3>";
	}
	else{
		echo "<h3>You have failed!</h3>";
	}

	?>

<?php require 'footer.php' ?>