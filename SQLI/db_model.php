<?php 

$host = 'localhost';
$username = 'root';
$password = '';

$database = 'test_db';
$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    echo "Connection failed!";
}