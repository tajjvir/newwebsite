<?php include 'header.php'?> 

<h1>Switch Statement</h1>

<?php 

	$grade = 'A';

switch ($grade) {
	case 'A':
		echo "<h1 style='color:green'>You are excellent!</h1>";
		break;
	case 'B':
		echo "<h1>You are good!</h1>";
		break;
	default:
		echo "<h1>You have failed!</h1>";
		break;
}

?>



<?php require 'footer.php' ?>