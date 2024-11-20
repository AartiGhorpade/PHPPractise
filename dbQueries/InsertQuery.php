<?php

include('./config.php');

$username =  $_POST['username'];
$userage =  $_POST['age'];

echo $username;
echo $userage;
$query = $conn->prepare("INSERT INTO `trial1`(`id`, `name`, `age`) VALUES (NULL, '$username', '$userage')");

if ($query === false) {
    echo "Error preparing the SQL query: " . $conn->error;
    exit();
}


$result = $query->execute();


echo "Inserted successfully";
