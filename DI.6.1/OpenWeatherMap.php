<?php

$url = 'http://api.openweathermap.org/data/2.5/weather?q=Kolding,dk&appid=07e02ba24a3caf7f46c40b512f315fc6';
$chandle = curl_init($url);
$urlnew = 'data.json';
$a = [];

curl_setopt($chandle, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($chandle);
curl_close($chandle);


$json = json_encode($a);            // array of objects to json
file_put_contents($urlnew, $json);
die();


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
    $tab = "        <table>
            <tr>
                <th colspan='2'>%s</th>
            </tr>
            <tr>
                <td colspan='2'>%s</td>
            </tr>
            <tr>
                <td>Low</td><td>High</td>
            </tr>
            <tr>
                <td>%s</td><td>%s</td>
            </tr>
        </table>";
    printf($tab."\n", $obj->name, strftime("%A", $obj->dt),
        round(K2C($obj->main->temp_min), 0),
        round(K2C($obj->main->temp_max), 0));
    ?>
    </body>
    </html>
<?php
function prettyPrintForDebug($obj) {
    $str = json_encode($obj, JSON_PRETTY_PRINT);
    print("<pre>".$str."</pre>");
}
function K2C($x) { return $x - 276; }