<?php include 'header.php'?>

<h1>Array and Manipulation</h1>

<?php 

// a variable
$num = 3;

// an array
// only one datatype

//to figure out 5th number from the Array
$number = array(1,2,3,4,5,6,7,8,9);
echo $number[5];

//to figure out 7th number from the Array
echo "<p><b>$number[7]</p></b>";

//to count the size of numbers from the Array Table
$size = count($number);
echo "Array number size is: $size";

//For loop to display all the numbers from the Array
for ($count = 0; $count < $size ; $count++) { 
	echo "<p>$number[$count]</p>";
}

 ?>

<?php require 'footer.php' ?>