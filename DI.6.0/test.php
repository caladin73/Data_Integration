<?php
$json = file_get_contents('data.json');
$content = json_decode($json, true);
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
        <th>Kvartal</th>
        <th>Befolkning</th>
        <th>Tilvækst</th>
        <th>Procent</th>
    </tr>

<?php
    foreach($content as $i => $item) {
    echo "<tr>";
    echo "<td>" . $content[$i]['label'] . "</td>";
    echo "<td>" . $content[$i]['population'] . "</td>";
    if ($i < "1") {
        echo "<td>NA</td>";
        echo "<td>NA</td>";
    } else {
        echo "<td>" . ($content[$i]['population']-$content[$i-1]['population']) . "</td>";
        echo "<td>" . number_format((float)(($content[$i]['population']-$content[$i-1]['population'])/$content[$i-1]['population'])*100, 2) . "%</td>";
    }
    echo "</tr>";
    }
?>

</table>

</body>
</html>