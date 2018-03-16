<?php
$url = 'https://pkgstore.datahub.io/core/country-list/data_json/data/8c458f2d15d9f2119654b29ede6e45b8/data_json.json';
$json = file_get_contents($url);
$content = json_decode($json, true);
?>

<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DI.6.</title>
</head>
<body>

<h1>Assignment DI.6.1</h1>

<p>Inout city name or zip code, and country.</p>

<param name= value="">

<form action="data.php" method="get">
    <br>City Name<br>
    <input type="text" name="city">
    <br><br>Zip Code <br>
    <input type="number" name="zip">
    <br><br>Country <br>
    <select name='country'/>
    <?php
    foreach($content as $i => $item) {
        {
            echo "<option value=" . $content[$i]['Code'] . ">" . $content[$i]['Name'] . "</option>";
        }
    }
    ?>
    </select>



    <br><br>
    <input type="submit" value="Submit">
</form>

<br><br>
<a href="country_abbreviation.php">Lande koder:</a>
<p>Hentet ned via API til JSON fil på nettet:</p>
<p>https://pkgstore.datahub.io/core/country-list/data_json/data/8c458f2d15d9f2119654b29ede6e45b8/data_json.json</p>


</body>
</html>