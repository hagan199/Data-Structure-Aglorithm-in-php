
<?php
// Given the head of a singly linked list, return the middle node of the linked list.

// If there are two middle nodes, return the second middle node.

// Example 1:

// Input: head = [1,2,3,4,5]
// Output: [3,4,5]
// Explanation: The middle node of the list is node 3.
// Example 2:

// Input: head = [1,2,3,4,5,6]
// Output: [4,5,6]
// Explanation: Since the list has two middle nodes with values 3 and 4, we return the second one.

function middleNode($head)
{
  // If we call the middleNode function with this linked list as its argument, it will first traverse the linked list and store each node in an array. After the traversal, the array will contain the following nodes:

  // csharp
  // Copy code
  // [1, 2, 3, 4, 5]
  // The length of the array is 5, so the middle node is the one at index 2, which is the node with value 3. This node is then returned as the result of the function.
  
  // To test the function, we can create a test case with the linked list 1 -> 2 -> 3 -> 4 -> 5 and check that the result of calling the function is the node with value 3. Here's an example test case:
    $array = [];
    $length = 0;
    while ($head != null) {
        $array[] = $head;
        $head = $head->next;
        ++$length;
    }
    $array = $array[$length / 2];

    return $array;
}
class ListNode {
  public $val = 0;
  public $next = null;
  function __construct($val) { $this->val = $val; }
}

$head = new ListNode(1);
$head->next = new ListNode(2);
$head->next->next = new ListNode(3);
$head->next->next->next = new ListNode(4);
$head->next->next->next->next = new ListNode(5);

$result = middleNode($head);
assert($result->val === 3);
?>


