<?php

include('./config.php');
$getData = $conn->prepare('Select * from trial1');
$getData->execute();
$result = $getData->get_result();
// print_r($result);

echo "<table border=1>";
if ($result->num_rows > 0) {
    echo "<tbody>";

    foreach ($result as $i) {
        echo "<tr>";
        echo "<td>" . $i['name'] . "</td>";
        echo "<td>" . $i['age'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
}
echo "</table>";
