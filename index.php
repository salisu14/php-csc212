<?php
  $dsn = 'mysql:host=localhost;dbname=mydb';
  $username = 'mydb_user';
  $password = 'mypassword';

  try {
    $db = new PDO($dsn, $username, $password);
    echo 'Database connected successfully.';
  } catch(PDOException $e) {
      $error = $e->getMessage();
      echo "An error occurred while connecting to the db";
  }