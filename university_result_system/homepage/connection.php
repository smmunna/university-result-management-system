<?php

$hostname = 'localhost';
$username = 'root';
$password = '';

$dbname =  'university_result_system';
$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
    die('Connection failed'.$conn->connect_error);
}

//else connection is successful

?>