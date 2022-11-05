<?php
include "vendor/autoload.php";

$id = $_GET['id'];
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$student = $collection->findOne(
    ['_id' => new MongoDB\BSON\ObjectId("$id")]
);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="card mx-auto" style="width: 1000px; margin-top: 50px; margin-bottom: 50px;">
        <div class="card-body">
            <h2 class="card-title">Edit Student</h2>
            <form method="POST" action="update.php">
                <input type="hidden" class="form-control" name="id" value="<?php echo $student['_id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Student ID</label>
                    <input type="text" class="form-control" name="studentId" value="<?php echo $student['studentId']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" value="<?php echo $student['firstName']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" value="<?php echo $student['lastName']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Birthdate</label>
                    <input type="text" class="form-control" name="birthdate" value="<?php echo $student['birthdate']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $student['address']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Program</label>
                    <input type="text" class="form-control" name="program" value="<?php echo $student['program']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="contactNumber" value="<?php echo $student['contactNumber']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Emergency Contact</label>
                    <input type="text" class="form-control" name="emergencyContact" value="<?php echo $student['emergencyContact']; ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Submit" name="submitStudent">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>