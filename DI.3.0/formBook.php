<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Book input</title>
    <link rel='stylesheet' href='css/mystyles.css'/>

</head>

<body>
<h1>Book input form</h1>
<form action='insertBook.php' method='post'>
    <p>
        <strong>Reference:</strong><br/>
        <input type='text' name='ref'/>&nbsp Not Required
    </p>
    <p>
        <strong>Mycanon:</strong><br/>
        <input type='text' name='mdu'/>&nbsp Not Required
    </p>
    <p>
        <strong>Book title:</strong><br/>
        <input type='text' name='title'/>&nbsp Not Required
    </p>
    <p>
        <strong>Edition:</strong><br/>
        <input type='number' name='edition' required/>&nbsp Required
    </p>
    <p>
        <strong>Author Firstname:</strong><br/>
        <input type='text' name='firstname'/>&nbsp Not Required
    </p>
    <p>
        <strong>Author Lastname:</strong><br/>
        <input type='text' name='lastname'/>&nbsp Not Required
    </p>
    <p>
        <strong>Publisher Name:</strong><br/>
        <input type='text' name='publisher_name' />&nbsp Not Required
    </p>
    <p>
        <strong>Publisher Year:</strong><br/>
        <input type='text' name='publisher_year' required/>&nbsp Required
    </p>
    <p>
        <strong>Publisher Place:</strong><br/>
        <input type='text' name='publisher_place'/>&nbsp Not Required
    </p>
    <p>
        <strong>Pages:</strong><br/>
        <input type='number' name='pages' required/>&nbsp Required
    </p>
    <p>
        <strong>ISBN:</strong><br/>
        <input type='text' name='isbn' required/>&nbsp Not Required
    </p>
    <p>
        <strong>Price:</strong><br/>
        <input type='number' name='price' required/>&nbsp Required
    </p>
    <p>
        <strong>Currency:</strong><br/>
        <input type='text' name='currency'/>&nbsp Not Required
    </p>
    <p>
        <strong>Comment:</strong><br/>
        <input type='text' name='comment' required/>&nbsp Not Required
    </p>
    <p>
        <input type='submit' value='Submit'/>
    </p>
</form>
</body>
</html>