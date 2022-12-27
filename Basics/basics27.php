<?php
// 27. Write a PHP script to print out all the credits for PHP.
// my solution
//echo phpcredits();

// solution w3resource:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My credits page</title>
</head>
<body>
    <?php
    // some code of your own
    phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
    // some more code
    ?>
</body>
</html>
