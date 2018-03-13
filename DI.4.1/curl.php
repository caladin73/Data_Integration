<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Book input</title>
    <link rel='stylesheet' href='css/mystyles.css'/>

</head>
<body>
<h1>curl url:</h1>


<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';


// Replace space with +, when using it in URL
$name = str_replace(' ', '+', $_POST["name"]);
$countrycode = str_replace(' ', '+', $_POST["countrycode"]);
$district = str_replace(' ', '+', $_POST["district"]);
$population = str_replace(' ', '+', $_POST["population"]);

//echo "curl -v -X POST http://localhost/Data_Integration/DI.4.1/insert.php -d \"name=Peters+by&countrycode=DNK&district=Drejens&population=500\""

$actual_link = $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']) . "/insert.php";

echo "curl -v -X POST " . $actual_link . " -d" . " 'name=" . $name . "";

echo "<br>";

echo $name . "<br>";
echo $countrycode . "<br>";
echo $district . "<br>";
echo $population . "<br>";






?>





</body>
</html>