<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Book input</title>
    <link rel='stylesheet' href='css/mystyles.css'/>

</head>

<body>
<h1>Book input form</h1>
<form action='insertCar.php' method='post'>
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
        <input type='text' name='edition'/>&nbsp Not Required
    </p>
    <p>
        <strong>Edition:</strong><br/>
        <input type='number' name='edition' required/>&nbsp Required
    </p>
    <p>
        <strong>Author Firstname:</strong><br/>
        <input type='text' name='firstname' required/>
    </p>
    <p>
        <strong>Author Lastname:</strong><br/>
        <input type='text' name='lastname' required/>
    </p>
    <p>
        <strong>Publisher Name:</strong><br/>
        <input type='text' name='publisher_name' required/>
    </p>
    <p>
        <strong>Publisher Year:</strong><br/>
        <input type='text' name='publisher_year' required/>
    </p>
    <p>
        <strong>Publisher Place:</strong><br/>
        <input type='text' name='publisher_place' required/>
    </p>
    <p>
        <strong>Pages:</strong><br/>
        <input type='number' name='pages' required/>
    </p>
    <p>
        <strong>ISBN:</strong><br/>
        <input type='text' name='isbn' required/>
    </p>
    <p>
        <strong>Currency:</strong><br/>
        <input type='number' name='currency' required/>
    </p>
    <p>
        <strong>Price:</strong><br/>
        <input type='number' name='price' required/>
    </p>
    <p>
        <strong>Comment:</strong><br/>
        <input type='text' name='comment' required/>
    </p>
    <p>
        <input type='submit' value='Submit'/>
    </p>
</form>
</body>
</html>