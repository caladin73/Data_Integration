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
$book->addAttribute('ref', $ref);
$book->addAttribute('mdu', $mdu);
$book->addChild('title', $title);
$book->addChild('edition', $edition);
$book->addChild('firstname', $firstname);
$dealersecurity  = $car->addChild('dealersecurity');
$dealersecurity->addAttribute('buyback', $buyback);

$book->asXML($file);

header('Location: validator.php');