<?php
$json = file_get_contents('data.json');
$content = json_decode($json, true);

foreach($content as $i => $item) {
    echo $i;
    echo " ";
    echo $content[$i]['label'];
    echo " ";
    echo $content[$i]['population'];
    echo " ";
    if ($i < "1") {
        echo "NA";
        echo " ";
        echo "NA";
    } else {
        echo $content[$i]['population']-$content[$i-1]['population'];
        echo " ";
        echo number_format((float)(($content[$i]['population']-$content[$i-1]['population'])/$content[$i-1]['population'])*100, 2) . "%";
    }
    echo  "<br>";
}
