<?php

// 13. Write a e PHP script to display string, values within a table. 
// Note : Use HTML table elements into echo.
// my solution: 
$mrA = "1000$";
$mrB = "1200$";
$mrC = "1400$";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black" class="table">
        <tr style="border: 1px solid black">
            <td style="color: blue; border: 1px solid black">Salary of Mr. A is:</td>
            <td style="border: 1px solid black"><?php echo $mrA; ?></td>
        </tr>
        <tr style="border: 1px solid black">
            <td style="color: blue; border: 1px solid black">Salary of Mr. B is:</td>
            <td style="border: 1px solid black"><?php echo $mrB; ?></td>
        </tr>
        <tr style="border: 1px solid black">
            <td style="color: blue; border: 1px solid black">Salary of Mr. C is:</td>
            <td style="border: 1px solid black"><?php echo $mrC; ?></td>
        </tr>
    </table>
</body>
</html>

