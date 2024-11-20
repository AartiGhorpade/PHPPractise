<html>

<head>
    <title>Display data in table</title>
</head>

<body>
    <?php

    $users = [
        ["arti", '25', "sangli"],
        ['arti', '25', 'sangli'],
        ['arti', '25', 'sangli'],
    ];

    echo "<table border=1>";

    echo "<tr>";
    echo "<th>Sno</th>";
    echo "<th>Name</th>";
    echo "<th>Age</th>";
    echo "<th>City</th>";
    echo "</tr>";

    echo "<tbody>";

    $sno = 1;
    foreach ($users as $i) {
        echo "<tr>";
        echo "<td>" . $sno . "</td>"; 
        foreach ($i as $values) {
            echo "<td>" . $values . "</td>";
        }
        echo "</tr>";
        $sno++;
    }

    echo "</tbody>";
    echo "</table>";
    ?>
</body>

</html>