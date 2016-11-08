<?php
session_start();

if (! array_key_exists("s4sToken", $_SESSION)) {
    header('Location: /login.php');
    die;
}

?>