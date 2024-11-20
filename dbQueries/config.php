<?php

$host = "localhost";
$user = "root";
$password = null;
$database = "trialdb";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die('failed to connect');
}
// echo "Connection successfull";
