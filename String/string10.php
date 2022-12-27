<?php

$str = "the quick brown fox jumps over the lazy dog.";
// preg_replace - perform a regular expression search and replace
// Description: preg_replace(string|array $pattern, string|array $replacement, string|array $subject, int $limit = -1, int &$count = null): string|array|null
// searches subject for matches to pattern and replaces them with replacement values
// url: https://www.php.net/manual/en/function.preg-replace.php
echo preg_replace('/the/', 'That', $str, 1). "<br>";