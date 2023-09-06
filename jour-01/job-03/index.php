<?php

function my_is_multiple(int $divider, int $multiple): bool
{
    if (($multiple / $divider) === $divider) {
        return true;
    } else {
        return false;
    }
}

$divider = 2;
$multiple = 5;

my_is_multiple($divider, $multiple);
