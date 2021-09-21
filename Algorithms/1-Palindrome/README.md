# 1. Palindrome 

## Description
A **palindrome** is a word, number, phrase, or other sequence of characters which reads the same backward as forward, such as madam or racecar.

Create a function that will check if a specified word is a palindrome or not.


## Solution
### PHP
```php
function isPalindrome(string $word): bool
{
	$wordArray = str_split($word, 1);
	$newWordArray = array_reverse($wordArray);
	
	return $wordArray == $newWordArray;
}

echo isPalindrome("kayak");
```
### Go

```go
package main

import "fmt"

func isPalindrome(input string) bool {
	for i := 0; i < len(input)/2; i++ {
		if input[i] != input[len(input)-i-1] {
			return false
		}
	}
	return true
}

func main() {
	fmt.Println(isPalindrome("anna"))
	fmt.Println(isPalindrome("not a palindrome"))
}

```