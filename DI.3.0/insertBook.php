<?php
foreach ($_POST as $key => $value)
    $$key = $value;

$file = './data/booksXML2.xml';
$xml_books = simplexml_load_file($file);     // read xml into object

/**
$id = 0;
foreach ($xml_books as $book)                 // find highest id
    if ($book['id'] > $id)
        $id = $book['id'];
$id++;                                  // increment highest id for use
*/

$book = $xml_books->addChild('book');
$car->addAttribute('ref', $ref);
$car->addAttribute('mdu', $mdu);
$car->addAttribute('manufacturer', $manufacturer);
$car->addAttribute('model', $model);
$car->addChild('meter', $miles);
$car->addChild('color', $color);
$car->addChild('price', $price);
$dealersecurity  = $car->addChild('dealersecurity');
$dealersecurity->addAttribute('buyback', $buyback);

$cars->asXML($file);

header('Location: ./readBooks.php');