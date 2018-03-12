<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$dbh = DbH::getDbH();

$sql = "select * from city";
$res = $dbh->query($sql);

$a = array();

foreach ($res as $out) {
    array_push($a, $out);
}

var_dump($a);

die();

$arrlength = count($a);
for($x = 0; $x < $arrlength; $x++) {
    echo $a[$x] . "<br>";
    //echo $id . " " . $name . " " . $countrycode . " " . $district . " " . $population;
}

/**
$xmit = json_encode($out);
header('Content-Type: application/json');
print($xmit);
 */