<?php
    include 'config.php';

    session_destroy();

    header('Location:'. URL .'index.php');
?>