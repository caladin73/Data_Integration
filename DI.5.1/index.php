<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DI.5.1</title>
</head>
<body>

<h1>Assignment DI.5.1</h1>

<p><b>Copy curl url and run it in command linie, to insert 500 7 inc TV's:</b></p>

<?php
//echo "curl -v -X POST http://localhost/Data_Integration/DI.4.1/insert.php -d \"name=Peters+by&countrycode=DNK&district=Drejens&population=500\""
$actual_link = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']) . "/DI.5.1/LoginExp/myDbMod1.php";
$url = "curl -v -s -X POST " . $actual_link . " -d  'inch=7&tvno=500'";
echo $url;
?>

</body>
</html>