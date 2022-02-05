<?php
if(isset($_GET['index']) == false) {
    header('location: ../../view/student.php');
}

$index = $_GET['index'];

//get json data
$json = file_get_contents('../../translations/json/student.json');
$data = json_decode($json, true);

$row = $data[$index];

include "../../view/components/header.php";
?>

<div class="container w-50">
    <form method="POST" action="../../src/controllers/student/edit.php">
        <!--<a href="read.php">Back</a>-->
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
        </div>
        <div class="mb-3">
            <label for="enrollNumber" class="form-label">enrollNumber</label>
            <input type="text" class="form-control" id="enrollNumber" name="enrollNumber" value="<?php echo $row['enrollNumber']; ?>">
        </div>
        <div class="mb-3">
            <label for="dateOfAdmission" class="form-label">dateOfAdmission</label>
            <input type="text" class="form-control" id="dateOfAdmission" name="dateOfAdmission" value="<?php echo $row['dateOfAdmission']; ?>">
        </div>
        <input class="w-100 bg-success text-light border-0 p-2" type="submit" name="save" value="Save">
    </form>
</div>


