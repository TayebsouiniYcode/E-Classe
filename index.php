<?php
    // this is a simple file just for redirection page to login page inside view
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }

    Redirect('./view/login.php', false);

?>