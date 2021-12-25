<?php include 'header.php'?>

	<h1>User Defined Functions</h1>

	<?php 

	/*Defining a Function*/

	function writeMessage(){
		echo "You are a nice person</br>";
	}

	/*Calling a Function*/
	writeMessage();
	echo "<hr/>";
	writeMessage();
	writeMessage();

	/*Function with parameters*/

	function addfuntion($num1, $num2){
		$sum = $num1 + $num2;
		echo "The sum of $num1 and $num2 is: $sum </br>";
	}
	/*Product Function*/
	function returnProduct($num1, $num2){
	$prod = $num1 * $num2;
	return $prod;
	}

	$num = 500;
	addfuntion(10,20);
	addfuntion (10,$num);
	addfuntion ('50',"500");

	$return_value = returnProduct(10,200);
	echo $return_value .'<br/>';
	 ?>

<?php require 'footer.php' ?>