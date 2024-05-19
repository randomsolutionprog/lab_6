<?php
// Define the function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Call the function with sample values
$length = 4; // Example length
$width = 2; // Example width
$area = calculateArea($length, $width);

// Display the result
echo "The area of a rectangle with length $length and width $width is $area.";
?>
