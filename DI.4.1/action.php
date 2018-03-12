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

/**
$xmit = json_encode($out);
header('Content-Type: application/json');
file_put_contents('result.json', json_encode($a));
print($xmit);
*/