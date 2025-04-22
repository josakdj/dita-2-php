<?php 

$num = 3; // declares variable

echo "i love $num "; // returns i love 3

$num = "Digital School"; // changes variable type

echo "i love $num"; // returns i love digital school

//different types : string, integer, float (double numbers - numra me presje), bullion - true ose false, array ,object null and rescourses

$x = 120; // first variable
$y = 50; // second variable

echo "<br>"; // adds break lines
echo "<br>";
echo "<br>";

echo $x + $y; // mbledhje
echo "<br>";

echo $x - $y; // zbritje
echo "<br>";

echo $x * $y; // shumzim
echo "<br>";

echo $x / $y; // pjestim
echo "<br>";

echo $x % $y; // perqindje

echo "<br>"; // adds break lines
echo "<br>";
echo "<br>";

$name = "Filan";
$surname = "Fisteku";

$fullName = $name . " " . $surname;
echo $fullName;
echo "<br>";

echo $name . " " . $surname; // combines both variables adds a space in between

echo "<br>";
echo "<br>";
echo "<br>";

$the_string = "Digital School";

echo strlen($the_string); // tells the character number

echo "<br>";

echo str_word_count($the_string);
echo "<br>";

// echo "femna e buzokut i ka" .   " " . str_word_count($the_string) . " " . "Vjet";

echo "<br>";
echo "<br>";


$programming = "Programming is not cool";
echo str_replace("not", "very", $programming);

$programming = "naim frasheri";
echo "<br>";
echo strrev($programming);

echo "<br>";
