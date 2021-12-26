<?php include 'header.php'?>



	<!-- Basic HTML -->
	<h1>Hello World</h1>
<br>
<?php 
//Printing to HTML using echo
	echo "Hello PHP";
	echo '<br/>';
	echo "Second Line";
	echo '<br/>';
?>

<?php
//Declare Variable
$name = "Tajvir Chowdhury";
$age = 28;

//Echo Variable
echo $name;
echo "<h1>My Name is: $name</h1>";
echo "<h1>My Age is: $age</h1>";

//Concetanation Method

echo '<h1>My name is: '.$name.'</h1>';

?>

<button class="btn btn-outline-warning"><a class="nav-link active" href="array.php">Click Here</a></button>
<button class="btn btn-outline-success"><a class="nav-link active" href="array.php">Click Here</a></button>

<?php require 'footer.php' ?>
