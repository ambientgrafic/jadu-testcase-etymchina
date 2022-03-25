<?php declare(strict_types=1);

namespace App;

/**
 * Pangrams, anagrams and palindromes
 *
 * Implement each of the functions of the Checker class.
 * Aim to spend about 10 minutes on each function.
 */
class Checker
{
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word) : bool
    {
        $reverseString = strrev($word);
        if ($reverseString == $word) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * An anagram is the result of rearranging the letters of a word or phrase
     * to produce a new word or phrase, using all the original letters
     * exactly once.
     *
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public function isAnagram(string $word, string $comparison) : bool
    {
        $comparison = str_replace(' ', '', $comparison);

        if (count_chars($word, 1) == count_chars($comparison, 1)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * A Pangram for a given alphabet is a sentence using every letter of the
     * alphabet at least once.
     *
     * @param string $phrase
     * @return bool
     */
    public function isPangram(string $phrase) : bool
    {
    }
}
// $word = "anna";
// $x = new Checker();
// if ($x->isPalindrome($word)) {
//     echo $word ." is a palindrome string";
// } else {
//     echo $word ." is not a palindrome string";
// }

$word = "coalface";
$comparison = "cacao elf";

$x = new Checker();
if ($x->isAnagram($word, $comparison)) {
    echo $word . " and " . $comparison . " are anagram";
} else {
    echo $word . " and " . $comparison . " are not anagram";
}
