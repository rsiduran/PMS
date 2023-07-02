<?php

    session_start();
    unset($_SESSION['akonapinakamalakas']);
    session_destroy();

    header("location: ../../index.php");

?>