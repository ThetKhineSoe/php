<?php

// => PHP Looping

// for
// foreach
// while
// do...while

$colorones = ["red","green","blue","white","black","gray","pink"]; // indexed array

echo count($colorones);
var_dump($colorones);

$coloroneskey = array_keys($colorones);

// echo $coloroneskey; // error
var_dump($coloroneskey); // [0,1,2,3,4,5,6]


// for
for($i=0; $i< count($colorones); $i++){
	// echo $i; // 0 to 6

	// echo "This is indexed array or manual array by for loop = index key is ". $i ." and value is = ".$colorones[$i]."<br/>";

	echo "This is indexed array or manual array by for loop = index key is ". $coloroneskey[$i] ." and value is = ".$colorones[$i]."<br/>";
}


// for each
foreach($colorones as $colorone){
	echo "This is indexed array or manual array by foreach = ". $colorone;
}

foreach($colorones as $key=>$colorone){
	// echo $key;
	echo "This is indexed array or manual array by foreach = index key is ". $key ." and value is ". $colorone;
}


// while
$x =0;
while($x < count($colorones)){
	// echo $colorones[$x];
	// $x++;

	// echo "This is indexed array or manual array by foreach = index key is ". $x ." and value is ". $colorones[$x];
	// echo "This is indexed array or manual array by foreach = index key is ". $coloroneskey[$x] ." and value is ". $colorones[$x];
}

$y=0;

do{
	// echo "This is indexed array or manual array by foreach = index key is ". $y ." and value is ". $colorones[$y];
	echo "This is indexed array or manual array by foreach = index key is ". $coloroneskey[$y] ." and value is ". $colorones[$y];

	$y++;
}while($y < count($colorones));

?>