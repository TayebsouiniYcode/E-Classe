<?php include '../../view/components/header.php'; ?>

<?php
//fetch data from json
$json = file_get_contents('../db/db.json');
$data = json_decode($json);

?>

<div class="container">
    <a class="btn btn-primary" href="add.php">Ajouter un Student</a>
    <ul class="list-group mt-5">
        <?php
        foreach ($data as $item) :
            foreach ($item as $pro => $val) :
                echo "<li class=\"list-group-item bg-dark text-light\">{$val}</li>";
            endforeach;
            echo '<li class="list-group-item bg-dark text-light">';
            echo "<a href=\"edit.php?enrollNumber=$item->enrollNumber\">Edit</a>
                        <a href=\"delete.php?enrollNumber=$item->enrollNumber\">Delete</a>";
            echo '</li>';
            echo '<hr>';
        endforeach;
        ?>
    </ul>
    <?php

    ?>
</div>

<?php include '../../view/components/footer.php'; ?>
