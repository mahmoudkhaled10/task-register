<?php

$my_str = "lorem ipsum dolor sit amet consectetur";



echo "<br>";
// string all uppercase letters
echo strtoupper($my_str);

echo "<br>";
echo "<br>";

// string all lowercase letters.
echo strtolower($my_str);

echo "<br>";
echo "<br>";

// string's first character uppercase
echo ucfirst($my_str);

echo "<br>";
echo "<br>";


//  string's first character of all the words uppercase
echo ucwords($my_str);


echo "<br>";
echo "<br>";


// Write a PHP script to split the following string.
// Sample string : '082307'
// Expected Output : 08:23:07

echo "<br>";
$string = "082307";

echo $string;

echo "<br>";
echo "<br>";

echo substr(chunk_split($string, 2, ':') , 0, -1)."\n";