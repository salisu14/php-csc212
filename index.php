<?php
require_once 'connectiondb.php';

$query = 'SELECT * FROM student';
$statement=$db->prepare($query);
$statement->execute();
$students=$statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
      table { border: 2px solid black; border-collapse: collapse;}
      tr, th, td { border: 1px solid blue; padding: 0.5em;}
    </style>
</head>
<body>
   <h1>Students Bio Data</h1>
   <table>
     <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Date of birth</th>
     </tr>
     <?php foreach($students as $st): ?>
     <tr>
      <td><?php echo $st['firstname']; ?></td>
      <td><?php echo $st['surname']; ?></td>
      <td><?php echo $st['gender']; ?></td>
      <td><?php echo $st['birthdate']; ?></td>
     </tr>
     <?php endforeach; ?>
   </table>
   <p><?php echo count($students); ?> student(s) found!</p>
   <p><a href="form.php">Add a student</a></p>
</body >
</html>