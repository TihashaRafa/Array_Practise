<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifyWord($text) {
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    echo $text;
}

modifyWord($text);

// output
// the quick red fox jumps over the lazy dog.
