<?php

function my_str_reverse(string $string) : string {

    $i = 0;
    $newString = '';

    while (isset($string[$i])) {
        $newString = $string[$i] . $newString;
        $i++;
    } 

    return $newString;

};

$string = "Hello la Plateforme";
my_str_reverse($string);
