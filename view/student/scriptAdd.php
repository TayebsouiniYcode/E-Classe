<?php
if(isset($_POST['save'])){
    //open the json file
    $json = file_get_contents('../../db/student.json');
    $data = json_decode($json, true);

    //find enrollNumber
    foreach ($data as $item) :
        if (in_array($_POST['enrollNumber'], $item)) :
            header('location: ../student.php?msg=true');
            die(null);
        endif;
    endforeach;

    //data in out POST
    $input = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'enrollNumber' => $_POST['enrollNumber'],
        'dateOfAdmission' => $_POST['dateOfAdmission']
    );

    //append the input to our array
    $data[] = $input;
    //encode back to json
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('../../db/student.json', $json);

    header('location: ../student.php');
}
?>