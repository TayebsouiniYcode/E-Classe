<?php include '../../view/components/header.php'; ?>
<?php

$filename = '../db/student.csv';
$data = [];

// open the file
$f = fopen($filename, 'r');

if ($f === false) {
    die('Cannot open the file ' . $filename);
}

// read each line in CSV file at a time
while (($row = fgetcsv($f)) !== false) {
    $data[] = $row;
}

// close the file
fclose($f);

?>
<div class="container">
    <a class="btn btn-primary" href="add.php">Ajouter un Student</a>
    <ul class="list-group mt-5">
        <?php
        foreach ($data as $item) :
            foreach ($item as $key => $val) :
                echo "<li class=\"list-group-item bg-dark text-light\">{$val}</li>";
            endforeach;
            echo '<li class="list-group-item bg-dark text-light">';
            echo "<a href=\"edit.php?enrollNumber=\">Edit</a>
                        <a href=\"delete.php?enrollNumber=\">Delete</a>";
            echo '</li>';
            echo '<hr>';
        endforeach;
        ?>
    </ul>
</div>

