<?php

$host = "localhost";
$username = "root";
$password = null;
$database = "trialdb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("something went wrong" . $conn->connect_error);
}
// echo "Connection successfull";

$query = "Select * from trial1";
$result = $conn->query($query);


if ($result->num_rows > 0) {
    foreach ($result as $i) {
        echo "id is" . $i['id'] . "and name is" . $i['name'] . "<br/>";
    }
}
$conn->close();
