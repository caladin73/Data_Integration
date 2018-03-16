<?php

if ($_GET['city']) {
    $city = $_GET['city'];
} else {
    $city = $_GET['zip'];
}
$country = $_GET['country'];
//$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "," . $country . "&appid=07e02ba24a3caf7f46c40b512f315fc6";
$url = "http://api.openweathermap.org/data/2.5/weather?q=Kolding,dk&appid=07e02ba24a3caf7f46c40b512f315fc6";
echo $url . "<br>";

$chandle = curl_init($url);
curl_setopt($chandle, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($chandle);
// receiced as a one line json string
$obj = json_decode($res); // unserialize to json obj
//prettyPrintForDebug($obj);   // comment out after debugging

?>
    <!doctype html>
    <html>
    <head>
        <style>
            table, th, td { border: 1px solid blue; }
        </style>
    </head>
    <body>
    <?php
    $tab = "<table>
            <tr>
                <th colspan='2'>Current in %s</th>
            </tr>
            <tr>
                <td>Temp [C]</td><td>%s</td>
            </tr>
            <tr>
                <td>Pressure [hPa]</td><td>%s</td>
            </tr>
            <tr>
                <td>Wind direction [deg].</td><td>%s</td>
            </tr>
        </table>";
    printf($tab."\n", $obj->name, round(K2C($obj->main->temp), 0),
        $obj->main->pressure,
        $obj->wind->deg);

    $tab1 = "<table>
            <tr>
                <th colspan='2'>5 days forecast for: %s</th>
            </tr>
            <tr>
                <td>Temp [C]</td><td>%s</td>
            </tr>
            <tr>
                <td>Pressure [hPa]</td><td>%s</td>
            </tr>
            <tr>
                <td>Wind direction [deg].</td><td>%s</td>
            </tr>
        </table>";
    printf($tab1."\n", $obj->name, round(K2C($obj->main->temp), 0),
        $obj->main->pressure,
        $obj->wind->deg);
    ?>


    </body>






    </html>
<?php

/*
function prettyPrintForDebug($obj) {
    $str = json_encode($obj, JSON_PRETTY_PRINT);
    print("<pre>".$str."</pre>");
}
*/
function K2C($x) { return $x - 272; }
//round(K2C($obj->main->temp), 0),
//strftime("%A", $obj->dt),