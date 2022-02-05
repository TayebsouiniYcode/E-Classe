<?php
if (isset($_POST['save'])) {
    //open the json file
    $json = file_get_contents('../../../translations/json/student.json');
    $data = json_decode($json, true);
    //set the updated values
    $input = array(
        'image' => "profile.png",
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'enrollNumber' => $_POST['enrollNumber'],
        'dateOfAdmission' => $_POST['dateOfAdmission']
    );

    //update the selected index
    $data[$index] = $input;

    //encode back to json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('../../../translations/json/student.json', $data);

    header('location: ../../../view/student.php');
}
include "../../../view/components/footer.php";
