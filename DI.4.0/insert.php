<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

//jeg bruger følgende curl komando fra commandlinie
//curl -v -X POST http://localhost/Data_Integration/DI.4.0/insert.php -d "countrycode=DNK&language=sprog&isofficial=T&percentage=5"

$countrycode = $_POST["countrycode"];
$language = $_POST["language"];
$isofficial = $_POST["isofficial"];
$percentage = $_POST["percentage"];

$dbh = DbH::getDbH();
$sql = "INSERT INTO countrylanguage (countrycode, language, isofficial, percentage) VALUES ('$countrycode', '$language', '$isofficial', '$percentage')";
//$sql = "INSERT INTO countrylanguage (countrycode, language, isofficial, percentage) VALUES ('DNK', 'sprog', 'F', 5)";
//print($sql);
//die();
$res = $dbh->query($sql);



