<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

//jeg bruger følgende curl komando fra commandlinie
//curl -v -X POST http://localhost/Data_Integration/DI.4.0/insert.php -d "countrycode=DNK&language=sprog&isofficial=T&percentage=5"

$countrycode = $_GET["countrycode"];
$language = $_GET["language"];
$isofficial = $_GET["isofficial"];
$percentage = $_GET["percentage"];

$dbh = DbH::getDbH();
$sql = "INSERT INTO countrylanguage (countrycode, language, isofficial, percentage) VALUES ('$countrycode', '$language', '$isofficial', '$percentage')";
//$res = $dbh->query($sql);

echo "record successfully inserted into database";
echo "<br>";
var_dump($sql);