<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$con = @mysqli_connect('', 'root', '','db_cordova');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}


?>