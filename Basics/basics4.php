<?php 
// Create a simple HTML form and accept the user name and display the name through PHP echo statement. 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="" name="" class="">
        <h2>Please input your name:</h2>
        <input type="text" class="form-control" name="">
        <input type="submit" value="Submit Name">
    </form>
    <?php
    // retrieve name from query string and store to a local variable
    $name = $_POST["name"];
    echo "<h3>Hello $name </h3>";
    ?>
</body>
</html>