<?php
// chunk_split - split a string into smaller chunks and
// chunk_split( string $string, int $lengt = 76, string $separator = "\r\n") : string, can be used to split a string into smaller chunks which is useful for e.g. converting base64_encode output to match RFC 2045 semantics. it inserts seperator every lenth characters.
// Parameters: string - the string to be chunked, length - the chunk length, separator - the lin ending sequence
// Return values: returns the chunked string.
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>