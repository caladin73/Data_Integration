<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$dbh = DbH::getDbH();

$sql = "select country.capital as country_code, country.name as Country, country.population as Population, country.headofstate as Headofstate, city.name as Capital_city, city.population as Population_in_Capital";
$sql .= " from country";
$sql .= " inner join city on country.capital = city.id";
$sql .= " where country.name =  '" . $_GET["country"] . "'";
$res = $dbh->query($sql);

$a = array();

foreach ($res as $out) {
    array_push($a, $out);
}

$arrlength = count($a);

for($x = 0; $x < $arrlength; $x++) {
}

$xmit = json_encode($out);
header('Content-Type: application/json');
print($xmit);