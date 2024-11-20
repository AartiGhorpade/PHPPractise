<?php

include('./config.php');

$username = $_POST['username'];
$age = $_POST['age'];
$id = $_POST['id'];

$updateQuery = $conn->prepare("update trial1 SET name='$username',age = '$age'where id ='$id'");
$updateQuery->execute();

if ($updateQuery === "false") {
    echo "sjdj;l" . $conn->error;
} else {
    echo "updated successfully";
}
