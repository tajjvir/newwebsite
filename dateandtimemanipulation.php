<?php include 'header.php'?>

	<h1>Date and Time Manipulation</h1>

	<?php 
	$datenow = getdate();

	date_default_timezone_set("Asia/Dhaka");

	echo "Today's Date </br>";
	echo $datenow ['mday'].'</br>';
	echo $datenow ['mon'].'</br>';
	echo $datenow ['year'].'</br>';

	echo "Today's Date:" . $datenow ['mday']. '/' .$datenow ['mon']. '/' .$datenow ['year'].'</br>';

	echo time(). '</br>';

	print date("m/d/y h.i:sa</br>", time()) . '</br>';
	print "Today is ";

	print date("j of F Y, \a\t h.i:sa", time());

	 ?>

<?php require 'footer.php' ?>