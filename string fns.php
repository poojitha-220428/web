<?php
$str = "Hello World";

// String length
echo "Length: " . strlen($str) . "<br>";

// Word count
echo "Words: " . str_word_count($str) . "<br>";

// Reverse string
echo "Reverse: " . strrev($str) . "<br>";

// Find position
echo "Position of 'World': " . strpos($str, "World") . "<br>";

// Replace string
echo "Replace: " . str_replace("World", "PHP", $str) . "<br>";
?>
<?php
$filename = "demo.txt";

// Create & write
$file = fopen($filename, "w");
fwrite($file, "Welcome to PHP File Handling\n");
fclose($file);

// Append
$file = fopen($filename, "a");
fwrite($file, "This is additional content\n");
fclose($file);

// Read
$file = fopen($filename, "r");
echo fread($file, filesize($filename));
fclose($file);
?>