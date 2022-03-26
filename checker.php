<?php declare(strict_types=1);

namespace App;

class Checker
{
    public function isPalindrome(string $word) : bool
    {
        $reverseString = strrev($word);
        if ($reverseString == $word) {
            return true;
        } else {
            return false;
        }
    }
    
    public function isAnagram(string $word, string $comparison) : bool
    {
        $comparison = str_replace(' ', '', $comparison);

        if (count_chars($word, 1) == count_chars($comparison, 1)) {
            return true;
        } else {
            return false;
        }
    }

    public function isPangram(string $phrase) : bool
    {
        $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        $result = false;
        $array = str_split($phrase);
        foreach ($array as $char) {
            if (ctype_upper($char)) {
                $char = strtolower($char);
            }
            $key = array_search($char, $alphabet);
            if ($key !== false) {
                unset($alphabet[$key]);
            }
        }
        if (!$alphabet) {
            $result = true;
        }
        return $result;
    }
}
$word = "anna";
$x = new Checker();
if ($x->isPalindrome($word)) {
    echo $word ." is a palindrome string\n";
} else {
    echo $word ." is not a palindrome string\n";
}

$word = "Bark";
$x = new Checker();
if ($x->isPalindrome($word)) {
    echo $word ." is a palindrome string\n";
} else {
    echo $word ." is not a palindrome string\n";
}

$word = "coalface";
$comparison = "cacao elf";

$x = new Checker();
if ($x->isAnagram($word, $comparison)) {
    echo $word . " and " . $comparison . " are anagram\n";
} else {
    echo $word . " and " . $comparison . " are not anagram\n";
}

$word = "coalface";
$comparison = "dark elf";

$x = new Checker();
if ($x->isAnagram($word, $comparison)) {
    echo $word . " and " . $comparison . " are anagram\n";
} else {
    echo $word . " and " . $comparison . " are not anagram\n";
}
$phrase = "The quick brown fox jumps over the lazy dog";
$x = new Checker();

$phrase = "The quick brown fox jumps over the lazy dog";
$x = new Checker();

if ($x->isPangram($phrase)) {
    echo "The phrase is pangram\n";
} else {
    echo "The phrase is not pangram\n";
}

$phrase = "The British Broadcasting Corporation (BBC) is a British public service broadcaster.";
$x = new Checker();

if ($x->isPangram($phrase)) {
    echo "The phrase is pangram\n";
} else {
    echo "The phrase is not pangram\n";
}
