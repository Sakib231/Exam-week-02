<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string) {
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
    return $vowelCount;
}

function reverseString($string) {
    return strrev($string);
}

foreach ($strings as $string) {
    $originalString = $string;
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    
    echo "Original String: $originalString, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
