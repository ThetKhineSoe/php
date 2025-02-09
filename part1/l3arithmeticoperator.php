<?php

// => Arithmetic Operators
// +-*/%

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "Mawlamyine";
$car = false;
$myarrs = ["maung maung",'kyaw kyaw'];
$colors = array("red",'green',"blue");

echo $num1;  // 100
echo $num2;  // 200
echo $num1+$num2; // 300
echo $num1-$num2; // -100
echo $num2-$num1; // 100
echo $num1*$num2; // 20000
echo $num2/$num1; // 2
echo $num2%$num1; // 0


// echo $myarrs; // error , Array to string conversion
// print $myarrs; // error, Array to string conversion

var_dump($num1); // int(100)
var_dump($num3); // float(30.28)
var_dump($city); // string(11)
var_dump($car); // bool(true)
var_dump($myarrs); 
// array(2) 
// {
//   [0]=>
//   string(11) "maung maung"
//   [1]=>
//   string(9) "kyaw kyaw"
// }


$num4 = true;
$num5 = "10";
$num6 = '20';

var_dump($num5,$num6); // string
echo $num5+$num6; // 30
echo $num6-$num5; // 10
echo $num4+$num5; // 11
var_dump($num5+$num6); // int(30)


// Overwrite or Override

$num5 = 50;
$num6 = '60';
var_dump($num5,$num6);

echo $num5+$num6;




?>