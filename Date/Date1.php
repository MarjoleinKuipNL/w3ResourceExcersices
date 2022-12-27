<?php
// 1. Write a PHP script which will display the copyright information in the following format. To get current year you can use the date() function.
// Expected Format : © 2013 PHP Exercises - w3resource
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>©<?php echo date('Y'); ?> PHP Exercises - w3resources</p>
</body>
</html>