<?php
$strings = ["Hello", "World", "PHP", "Programming"];

// Counts the vowels
function CountVowels($strings){
    return preg_match_all('/[aeiou]/i', $strings, $matches);
}

// Reverse the string
function ReverseString($strings){
    return strrev($strings);
}

// Foreach loop for the array
foreach ($strings as $string) {
    $CountVowels = CountVowels($string);
    $ReverseString = ReverseString($string);
    echo "Original String: $string, Vowel Count: $CountVowels, Reversed String: $ReverseString \n";
}

