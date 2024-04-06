<?php

// => Variables Scope
		// (i) Global Variable Scope
		// (ii) Local Variable Scope
		// (iii) Static Variable Scope

	$num1 = 100; // Global Variable

	function funone(){
		echo "Global Variable print in function = $num1";
	}

	funone(); // Global Variable print in function = (no print out $num1, cuz function will generate error)

	echo "Global Variable print in function = $num1"; // Global Variable print outside = 100

	function funtwo(){
		$num2 = 200; // Local Variable
		echo "Local Variable print in function = $num2";
	}

	funtwo(); // Local variable print in function = 200

	echo "Local Variable print outside = $num2"; // Local Variable print outside = (no print out $num2 = cuz function will generate error)

	$num3 = 300;
	$num4 = 400;

	function funthree(){
		// global $num3;
		// global $num4;
		global $num3,$num4;
		global $result;

		$result = $num3 + $num4;
		echo "This is result , print by funthree = $result";
	}

	funthree();

	echo "Local Variable print outside = $result"; // Local Variable print outside = 700

	// => Super Global Variable

	$num5 = 500;
	$num6 = 600;

	function funfour(){
		$GLOBALS["sum"] = $GLOBALS['num5']+$GLOBALS['num6'];
		echo "This is sum, print by funfour = $sum"; // Undefined variable: sum
	}

	funfour();

	echo "Local Variable print outside = $sum"; // Local Variable print outside = 1100

	$num7 = 700;

	function funfive(){
		global $num7;

		$num7++;
		echo $num7;
	}

	funfive(); // 701
	funfive(); // 702
	funfive(); // 703
	funfive(); // 704

	function funsix(){
		$num8 = 800;

		$num8++;
		echo $num8;
	}

	funsix(); // 801
	funsix(); // 801
	funsix(); // 801
	funsix(); // 801


	function funseven(){
		static $num9 = 900;

		$num9++;
		echo $num9;
	}

	funseven(); // 901
	funseven(); // 902
	funseven(); // 903
	funseven(); // 904

	$num10 = 100;

	function funeight($num10){
		$num10 = 10000;
		echo $num10;
	}

	echo $num10;
	funeight($num10);
	echo $num10;

	$num11 = 110;

	function funnine($num11){
		$num11 = 11000;
		echo $num11;
	}

	echo $num11;
	funnine($num11);
	echo $num11;
	echo $num11;

	$name = "aung aung";
	$fullname = "aung aung oo";

	function funten(&$val){
		$val = "su su";
		echo $val;
	}

	echo $name;
	funten($name);
	echo $name;
	echo $name;
	echo $fullname; // aung aung oo




?>