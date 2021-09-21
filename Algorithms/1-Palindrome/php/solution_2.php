<?php

function isPalindrome(string $string): bool
{
    return strrev($string) == $string;
}

echo isPalindrome("kayak");
