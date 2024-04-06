<?php

// => Comparison Operators

// ==
// ===
// != not equal
// <> not equal
// !==
// >
// <
// >=
// <=
// ? (Ternary Operator)


$num1 = 10;
$num2 = "10";

echo $num1 == $num2 ? "your condition is true" : "your condition is false"; // true
echo ($num1 == $num2) ? "your condition is true" : "your condition is false"; // true
echo ($num1 === $num2) ? "your condition is true" : "your condition is false"; // false

echo ($num1 != $num2) ? "your condition is true" : "your condition is false"; // false
echo ($num1 !== $num2) ? "your condition is true" : "your condition is false"; // true

echo ($num1 <> $num2) ? "your condition is true" : "your condition is false"; // false

$num1 = 10;
$num2 = 20;

echo ($num1 > $num2) ? "your condition is true" : "your condition is false"; // false
echo ($num1 < $num2) ? "your condition is true" : "your condition is false"; // true
echo ($num1 >= $num2) ? "your condition is true" : "your condition is false"; // false
echo ($num1 <= $num2) ? "your condition is true" : "your condition is false"; // true



?>