<?php
/**
 * Created by PhpStorm.
 * User: Peter_Laptop
 * Date: 16-03-2018
 * Time: 10:03
 */

$url = 'https://raw.githubusercontent.com/lutangar/cities.json/master/cities.json';
$json = file_get_contents($url);
$content = json_decode($json, true);
?>

    <table border="1">
        <tr>
            <th>Number</th>
            <th>Country</th>
            <th>Name</th>
            <th>lat</th>
            <th>lng</th>
        </tr>

<?php
foreach($content as $i => $item) {
    echo "<tr>";
    echo "<td>" . ($i*1+1) . "</td>";
    echo "<td>" . $content[$i]['country'] . "</td>";
    echo "<td>" . $content[$i]['name'] . "</td>";
    echo "<td>" . $content[$i]['lat'] . "</td>";
    echo "<td>" . $content[$i]['lng'] . "</td>";
    echo "</tr>";
}
?>
    </table>