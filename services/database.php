<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'porto';

$db = mysqli_connect($hostname, $username, $password, $database_name);
if($db->connect_error){
    die('Error!' . $db->connect_error);
}
?>