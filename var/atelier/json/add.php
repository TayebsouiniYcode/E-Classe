<?php include "../../view/components/header.php"; ?>


<div class="container w-75">
    <h1 class="text-center mb-5 mt-5">Ajouter un étudiant</h1>
    <form method="POST">
        <!--<a href="read.php" class="btn btn-primary">Back</a>-->
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="enrollNumber" class="form-label">enroll Number</label>
            <input type="text" class="form-control" id="enrollNumber" name="enrollNumber">
        </div>
        <div class="mb-3">
            <label for="dateOfAdmission" class="form-label">date Of Admission</label>
            <input type="text" class="form-control" id="dateOfAdmission" name="dateOfAdmission">
        </div>
        <input class="btn btn-primary bg-success w-100" type="submit" name="save" value="Save">
    </form>
</div>

<?php
if(isset($_POST['save'])){
    //open the json file
    $json = file_get_contents('../db/db.json');
    $data = json_decode($json, true);

    //data in out POST
    $input = array(
        'name' => $_POST['name'],
        'phone' => $_POST['phone'],
        'enrollNumber' => $_POST['enrollNumber'],
        'dateOfAdmission' => $_POST['dateOfAdmission']
    );
    //append the input to our array
    $data[] = $input;
    //encode back to json
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('../db/db.json', $json);

    header('location: read.php');
}
?>