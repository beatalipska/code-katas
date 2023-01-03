package main

import (
	"fmt"
	"strings"
)

func isUnique(s string) bool {
	s = strings.ToLower(string(s))
	m := make(map[rune]bool)

	for _, ch := range s {

		if m[ch] {
			return false
		}
		m[ch] = true
	}
	return true
}

func main() {
	fmt.Println(isUnique("eksperyment"))
}
