<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $vowel_count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $vowel_count++;
        }
    }

    $reversed_string = strrev($string);

    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
}

?>