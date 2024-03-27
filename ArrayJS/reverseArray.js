/* Solution 1
1. Given string - convert it into array.
2. reverse it the array.
3. turn the array back .
*/
const reverseString = function (string) {
  const arr = string.split("");
  const re = arr.reverse();
  console.log('Test1', re);
  const countArray = arr.length; // Count the elements in the array
  console.log('countArray', countArray);
  string = arr.join("");
  console.log('Test2', string);
};
reverseString("Greating");


/* Solution 2
*/
const reverseString2 = function (string) {
  let reversed = "";
  for (let i = string.length - 1; i >= 0; i--) {
    reversed += string[i];
  }
  console.log('Test 2',reversed);
};
reverseString2("Greating");

/*Test1 [
  'g', 'n', 'i',
  't', 'a', 'e',
  'r', 'G'
]
Test3 8
Test gnitaerG
Test 2 gnitaerG
*/