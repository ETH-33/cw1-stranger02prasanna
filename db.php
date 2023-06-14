<?php
session_start();

$dbhost = 'localhost';
$dbname = 'crud';
$dbusername = 'prasanna';
$dbpassword = '1111';

$conn = mysqli_connect($dbhost,$dbusername,'',$dbname);

if (!$conn){
    die ("error");  
} else 
echo 'ok';
?>