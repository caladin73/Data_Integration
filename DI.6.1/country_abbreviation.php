<?php
/**
 * Created by PhpStorm.
 * User: Peter_Laptop
 * Date: 16-03-2018
 * Time: 10:03
 */

$url = 'https://pkgstore.datahub.io/core/country-list/data_json/data/8c458f2d15d9f2119654b29ede6e45b8/data_json.json';
$json = file_get_contents($url);
$content = json_decode($json, true);
?>

    <table border="1">
        <tr>
            <th>Number</th>
            <th>Code</th>
            <th>Name</th>
        </tr>

<?php
foreach($content as $i => $item) {
    echo "<tr>";
    echo "<td>" . ($i*1+1) . "</td>";
    echo "<td>" . $content[$i]['Code'] . "</td>";
    echo "<td>" . $content[$i]['Name'] . "</td>";
    echo "</tr>";
}
?>
    </table>