<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$dbh = DbH::getDbH();
$q = $dbh->prepare("select * from city");
$q->execute();


//jeg fandt ud af at jeg er nød til at encode array om, fordi der er tegn i data som json_encode ikke godtager
//så det gør jeg på den her måde, ved at bruge mb_convert_encoding før jeg gemmer datane i array
while($row = $q->fetch(PDO::FETCH_ASSOC))
{
    foreach($row as &$value)
    {
        $value = mb_convert_encoding($value, "UTF-8", "Windows-1252");
    }
    unset($value); # safety: remove reference
    $result[] = array_map('utf8_encode', $row );
}

$json = json_encode($result);
var_dump($json);
die();


if ($json)
    file_put_contents('result.json', $json);
else
    echo json_last_error_msg();




