<?php

function isPalindrome(string $word): bool
{
	$wordArray = str_split($word, 1);
	$newWordArray = array_reverse($wordArray);
	
	return $wordArray == $newWordArray;
}

echo isPalindrome("kayak");