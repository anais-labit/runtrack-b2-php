<?php

function my_fizz_buzz(int $length): array
{

    $arr = [];
    for ($i = 1; $i <= $length; $i++) {

        if ((($i % 3) == 0) && (($i % 5) == 0)) {
            $arr[] = "FizzBuzz";
        } elseif (($i % 3) == 0) {
            $arr[] = "Fizz";
        } elseif (($i % 5) == 0) {
            $arr[] = "Buzz";
        } else {
            $arr[] = $i;
        };
    }
    return $arr;
}

my_fizz_buzz(15);
