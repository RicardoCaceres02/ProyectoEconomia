<?php
$_SESSION = array();
session_destroy();
    header("Location: Index.php");
    exit();
?>