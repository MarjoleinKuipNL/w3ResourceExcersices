<?php 
// 14. Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/"). Go to the editor
// Webpage: A web page is a document that is suitable for the World Wide Web and web browsers. 
// A web browser displays a web page on a monitor or mobile device.

// The web page usually means what is visible, 
// but the term may also refer to a computer file, usually written in HTML or a comparable markup language. 
// Web browsers coordinate various web resource elements for the written web page, such as style sheets,
//  scripts, and images, to present the web page.
$all_lines = file('https://www.w3resource.com/');
foreach($all_lines as $line_num => $line){
    echo "Line No.--{$line_num}: ". htmlspecialchars($line) . "\n";
}
?>