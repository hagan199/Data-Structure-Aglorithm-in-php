<!-- The other definition of length is the number of DVDs, or other items, currently in the Array. This is something you'll need to keep track of yourself, and you won't get any errors if you overwrite an existing DVD, or if you leave a gap in the Array.

You might have noticed that we've been using a length variable in our previous examples, to keep track of the next empty index. -->
<?php
// Create a new array with a capacity of 6.
$array = array_fill(0, 6, 0);

// Current length is 0, because it has 0 elements.
$length = 0;

// Add 3 items into it.
for ($i = 0; $i < 3; $i++) {
    $array[$i] = $i * $i;
    // Each time we add an element, the length goes up by one.
    $length++;
}

echo "The Array has a capacity of " . count($array) . "\n";
echo "The Array has a length of " . $length;
?>