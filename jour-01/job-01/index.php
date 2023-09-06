<?php

function my_str_search(string $haystack, string $needle): int
{
    $count = 0;

    for ($x = 0; isset($haystack[$x]); $x++) {
        if ($haystack[$x] == $needle) {
            $count++;
        }
    }
    return ($count);
};

$haystack = "C'est la rentrée à la Plateforme";
$needle = "a";

my_str_search($haystack, $needle);
