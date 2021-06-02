<?php
$dsn = "mysql:host=localhost;dbname=sms";
$username = "root";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    //echo "Database connected...";
} catch(PDOExeption $e) {
  $error_msg = $e->getMessage();
  echo "There was an error connecting to the dB: " . $error_msg;
}