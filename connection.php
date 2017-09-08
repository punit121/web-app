<?php 
$dbname="company";
$host="localhost";
$username="root";
$pass="";
$connection= new mysqli($host,$username,$pass,$dbname);
if ($connection->connect_error) {
		die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
	# code...
}
else{
	echo " connection success";
}
?>