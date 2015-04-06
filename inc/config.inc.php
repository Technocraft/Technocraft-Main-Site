<?php
$domain = $_SERVER['SERVER_NAME'];

$protocol = 'http://';

$root_dir = $protocol . $domain . '/projects/technocraft';

$root_dir = htmlentities($root_dir);
?>