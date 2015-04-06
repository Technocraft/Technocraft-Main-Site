<?php
session_start();
$theme = $_GET['theme'];

$_SESSION['theme'] = $theme;

?>