# Timing of the tasks resolving

Writing the solution happened quickly. It took more time to think about it.

## isPalindrome

To check the word, I simply reverse it around with function `strrev()` and checked it against the original word.

## isAnagram

I had a little problem with the anagram. The verification word contained a space and I was able to remove it from the equation using a function `str_replace()`.

## isPangram

Also, there was an additional difficulty when checking pangrams, as characters in uppercase and lowercase are different characters.
I had to split character-by-character `str_split()` and convert all the characters to lowercase with function `strtolower()`.

I also used the function `unset()` to remove all used characters from the alphabet array.
