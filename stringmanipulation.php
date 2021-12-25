<?php include 'header.php'?>


	<h1>String Manipulation</h1>
	<?php 

	$phrase1 = "Student who came late";
	$phrase2 = "in class, stand with Rock";
	$name = "tanvir chowdhury";
	echo $phrase1 .",named Tiffany," .$phrase2;
	echo '<br/>';

	echo '<hr/>';


	//String transformation
	echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
 	echo 'Uppercase first letter of each word: '.ucwords($name).'<br/>';
	echo 'Uppercase full words: '.strtoupper($name).'<br/>';
	echo 'Lower full words: '.strtolower($name).'<br/>';

	echo '<hr/>';

	//Repeat function
	echo 'Repeat Function:' .str_repeat("A", 10).'<br/>';

	//Repeat Nested function
	echo 'Repeat Function:' .strtoupper(str_repeat("$name ", 10)).'<br/>';

	//Sub string
	echo 'Get a sub-string:' .substr($name, 5, 11).'<br/>';


	//Get position
	echo 'Get Position:'.strpos($name, "w").'<br/>';

	//Search String Character
	echo 'Find String Character:' .strchr("$name",'v').'<br/>';

	//Find Length of an String
	echo 'Length of String:'.strlen("$name").'<br/>';


	//Trim Function
	//Without Trim
	echo 'Without Trim: '."A". " B C D". " E".'<br/>';
	//Trim both spaces
	echo 'Trim spaces both sides: '."A". trim(" B C D "). "E".'<br/>';
	//Trim to the left
	echo 'Trim to the left: '."A". ltrim(" B C D "). "E".'<br/>';
	//Trim to the right
	echo 'Trim to the right: '."A". rtrim(" B C D "). "E".'<br/>';
	//Replace string function
	echo 'Replace String with another:'.str_replace("stand", "sit", $phrase2).'<br/>';
	 ?>

<?php require 'footer.php' ?>