<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$dbh = DbH::getDbH();


class city {
    public $id;
    public $name;
    public $countrycode;
    public $district;
    public $population;
}

$sth = $dbh->prepare("select * from city limit 5");
$sth->execute();

$result = $sth->fetchAll(PDO::FETCH_CLASS, "city");
//var_dump($result);

$content = json_encode($result);
file_put_contents('result.json', $content);








