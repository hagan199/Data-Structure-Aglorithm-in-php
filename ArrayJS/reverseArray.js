/* Solution 1
1. Given string - convert it into array.
2. reverse it the array.
3. turn the array back i.
*/
const reverseString = function (string) {
  const arr = string.split("");
  arr.reverse();
  string = arr.join("");
  console.log('Test', string);
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