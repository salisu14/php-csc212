<?php
require_once 'connectiondb.php';

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'surname');
$gender = filter_input(INPUT_POST, 'gender');
$birthdate = filter_input(INPUT_POST, 'dob');

$dept = filter_input(INPUT_POST, 'dept', FILTER_VALIDATE_INT);
if($dept === null || $dept === false) {
    $dept = 1;
}

$insertQuery = 'INSERT INTO student(studid, surname, firstname, gender, birthdate, dept)
                VALUES(null, :firstname, :surname,:gender, :birthdate, :dept)';

$statement=$db->prepare($insertQuery);
$statement->bindValue(':surname', $lastname);
$statement->bindValue(':firstname', $firstname);
$statement->bindValue(':gender',$gender);
$statement->bindValue(':birthdate',$birthdate);
$statement->bindValue(':dept',$dept);
$statement->execute();
$statement->closeCursor();

include("index.php");