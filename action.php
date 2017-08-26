<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$password = hash('sha256', $password);
$name = $_POST["name"];
$address = $_POST["address"];
$city = $_POST["city"];
$country = $_POST["country"];
$mobile = $_POST["mobile"];

$time=date("Y-m-d H:i:s"); 

include 'connection.php';
$sql = "INSERT INTO users (email,Time, name, password, address, city,)
        VALUES ('$email','$time', '$name', '$password', '$address', '$city', '$state', '$country', '$zipCode', '$mobile')";
$_SESSION["email"] = $email;
if ($connection->query($sql)) {
  $connection->close();
  header('Location: ./registration-complete.php');
  exit;
} else {
  echo "Error: " . $connection->error;
}
?>
