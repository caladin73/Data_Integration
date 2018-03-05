<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cars</title>
    <link rel='stylesheet' href='css/mystyles.css'/>
</head>
<body>
<?php
        // Read the XML document into a SimpleXMLElement object
        $cars = simplexml_load_file("data/booksXML2.xml"
                , "SimpleXMLElement"
                , LIBXML_NOCDATA );
?>
<h1>Books</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Edition</th>
        <th>Authors</th>
        <th>Author</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Publisher</th>
        <th>Name</th>
        <th>Year</th>
        <th>Place</th>
        <th>ISBN</th>
        <th>Pages</th>
        <th>Price</th>
        <th>Currency</th>
        <th>Comments</th>
    </tr>
    <?php
        foreach ($booksCanon->book as $book) {
    printf("%12s<tr>"
    . "<td>" . $book['title'] . "</td>"
    . "<td>" . $book['edition'] . "</td>"
    . "<td>" . $book['authors'] . "</td>"
    . "<td>" . $book['author'] . "</td>"
    . "<td>" . $book['firstname'] . "</td>"
    . "<td>" . $book['lastname'] . "</td>"
    . "<td>" . $book['publisher'] . "</td>"
    . "<td>" . $book['name'] . "</td>"
    . "<td>" . $book['year'] . "</td>"
    . "<td>" . $book['place'] . "</td>"
    . "<td>" . $book['pages'] . "</td>"
    . "<td>" . $book['isbn'] . "</td>"
    . "<td>" . $book['price'] . "</td>"
    . "<td>" . $book['currency'] . "</td>"
    . "<td>" . $book['comments'] . "</td>"
    . "n%12s</tr>\n"
    );
    }
    ?>
</table>
<p><a href='./index.php'>Return Home</a></p>
</body>
</html>