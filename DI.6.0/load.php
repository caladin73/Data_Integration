<?php
$json = file_get_contents('saveI.json');
$content = json_decode($json);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DI.6.0</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Quater</th>
        <th>Population</th>
        <th>Difference</th>
        <th>Percentages</th>
    </tr>

<?php

echo $content[1][1];

/**
    for ($x = 0; $x < count($content); $x++) {
    //foreach ($content as $data) {
        echo "<tr>";
        echo "<td>" . $content[0][$x] . "</td>";
        echo "<td>" . $content[1][$x] . "</td>";
        echo "<td>" . "space" . "</td>";
        echo "<td>" . "space" . "</td>";
        echo "</tr>";
    }
*/
?>


</table>

</body>
</html>