<?php
//Turn of deprecated and strict warnings
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

//MYSQL database connection configuration
$db_host = 'localhost';

$db_username = 'root';

$db_password = '';

$db = 'technocraft';

//Define current page
$current_page = htmlspecialchars("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);







//Connect to database
if (($connection = mysql_connect("$db_host", "$db_username", "$db_password")) === false) {
	die("Could not connect to database");
}

//Select database
if (mysql_select_db("$db") === false) {
	die("Could not select database");
	}
?>