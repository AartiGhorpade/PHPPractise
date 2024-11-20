<?php

include('./config.php');

$getData = $conn->prepare("select * from trial1");
$getData->execute();
$result = $getData->get_result();

echo "<table border=1>";

if ($result->num_rows > 0) {
    foreach ($result as $i) {
        echo "<tr>";
        echo "<td>" . $i['id'] . "</td>";
        echo "<td>" . $i['name'] . "</td>";
        echo "<td>" . $i['age'] . "</td>";
        echo "<td><form method='post'>
        <button name='deletebtn' value=" . $i['id'] . ">Delete </button>
        </form></td>";
        echo "</tr>";
    }
}
echo "</table>";

if (isset($_POST['deletebtn'])) {
    echo "yes";
    echo $id = $_POST['deletebtn'];

    $deleteQuery = $conn->prepare("delete from trial1 where id='$id'");
    $deleteQuery->execute();

    if ($deleteQuery === false) {
        echo "something went wrong <br/>" . $conn->error;
    } else {
        echo "deleted successfully";
    }
}
