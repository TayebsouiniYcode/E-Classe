<form method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>
    <input type="submit" value="save" name="save">
</form>

<?php
if(isset($_POST['save'])) {
    $data = [
        [$_POST['name'], $_POST['email']],
    ];

    $filename = '../db/student.csv';

// open csv file for writing
    $f = fopen($filename, 'a');

    if ($f === false) {
        die("Erreur sur l'ouverture du fichier " . $filename);
    }

// write each row at a time to a file
    foreach ($data as $row) {
        fputcsv($f, $row);
    }

// close the file
    fclose($f);
}