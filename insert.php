<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

$collection = $client->local->students;

$insertOneResult = $collection->insertOne([
   'studentId' => $_POST['studentId'],
   'firstName' => $_POST['firstName'],
   'lastName' => $_POST['lastName'],
   'birthdate' => $_POST['birthdate'],
   'address' => $_POST['address'],
   'program' => $_POST['program'],
   'contactNumber' => $_POST['contactNumber'],
   'emergencyContact' => $_POST['emergencyContact']
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());

header('Location: index.php');