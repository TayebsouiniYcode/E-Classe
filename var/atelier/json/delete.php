<?php
    //get the index
    $enrollNumber = $_GET['enrollNumber'];

    //fetch data from json
    $data = file_get_contents('../db/db.json');
    $data = json_decode($data, true);

    foreach ($data as $key => $item ) :
        if ($item['enrollNumber'] == $enrollNumber) :
            unset($data[$key]);
        endif;
    endforeach;
    //delete the row with the index
    //unset($data[$index]);

    //encode back to json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('../db/db.json', $data);

    header('location: read.php');
?>