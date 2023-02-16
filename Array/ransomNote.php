<?php
// Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.
// Each letter in magazine can only be used once in ransomNote.
// Example 1:
// Input: ransomNote = "a", magazine = "b"
// Output: false

function canConstruct($ransomNote, $magazine) {
  $ransomNoteCount = array_count_values(str_split($ransomNote));
  $magazineCount = array_count_values(str_split($magazine));
  
  foreach ($ransomNoteCount as $letter => $count) {
      if (!isset($magazineCount[$letter]) || $magazineCount[$letter] < $count) {
          return false;
      }
  }
  
  return true;

  // Test case 1: Ransom note can be constructed from magazine
$ransomNote = "aabbcc";
$magazine = "aabbbbccc";
$result = canConstruct($ransomNote, $magazine);
echo "Test case 1: " . ($result ? "Pass" : "Fail") . "\n"; // expected output: Pass

// Test case 2: Ransom note cannot be constructed from magazine
$ransomNote = "aabbcc";
$magazine = "aabbbc";
$result = canConstruct($ransomNote, $magazine);
echo "Test case 2: " . (!$result ? "Pass" : "Fail") . "\n"; // expected output: Pass

// Test case 3: Ransom note is empty
$ransomNote = "";
$magazine = "abc";
$result = canConstruct($ransomNote, $magazine);
echo "Test case 3: " . ($result ? "Pass" : "Fail") . "\n"; // expected output: Pass

// Test case 4: Magazine is empty
$ransomNote = "abc";
$magazine = "";
$result = canConstruct($ransomNote, $magazine);
echo "Test case 4: " . (!$result ? "Pass" : "Fail") . "\n"; // expected output: Pass

} 

// The function canConstruct takes two parameters, $ransomNote and $magazine, which are both strings. The function returns a boolean value indicating whether the characters in the $ransomNote string can be constructed from the characters in the $magazine string.
// Here's how the function works:
// The array_count_values function is used to count the occurrences of each character in the $ransomNote and $magazine strings. The str_split function is used to split each string into an array of individual characters.
// The function then loops through each character in the $ransomNote string and checks if the character exists in the $magazine string and if there are enough occurrences of that character in the $magazine string to construct the $ransomNote string.
// If the character is not found in the $magazine string or if there are not enough occurrences of that character in the $magazine string, the function returns false.
// If all characters in the $ransomNote string can be constructed from the $magazine string, the function returns true.
// For example, if the $ransomNote string is "aabbcc" and the $magazine string is "aabbbbccc", the function will return true because there are enough occurrences of each character in the $magazine string to construct the $ransomNote string.

?>