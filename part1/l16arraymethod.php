<?php

// => array_conbine(key,value) Function

$name = array("aung aung","su su","kyaw kyaw","hla hla");
$age = [30,25,35,40];

$result = array_combine($name,$age);
echo "<pre>".print_r($result,true)."</pre>";
echo $result["kyaw kyaw"]; // 35

// => count(array) Function
$vehicles = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw"];
echo count($vehicles); // 8

// => array_count_values(array) Function
$cars = ["toyota","ford","audi","mazda"];
echo "<pre>".print_r(array_count_values($cars),true)."</pre>";
$brands = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw"];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>";


// => array_chunk(array.length) Function
// => array_chunk(array.length.preservekey)
// preservekey = true/false

$couples = ["aung aung","su su","kyaw kyaw","nu nu","tun tun","yin yin","zaw zaw","hla hla"];

$result1 = array_chunk($couples,2);
echo "<pre>".print_r($result1,true)."</pre>";
echo $result1[0][1]; // su su

$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($result2,true)."</pre>"; // 0 1 2 3 4 5

$result3 = array_chunk($couples,2,false);
echo "<pre>".print_r($result2,true)."</pre>"; // 01 01 01


// => array_diff(array1,array2,array3,...) Function

$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>"; // [1] => green
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>"; // [1] => silver
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>"; // 

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["e"=>"red","f"=>"green","g"=>"black"];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>"; // [c] => blue [d] => yellow
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>"; // [g] => black

// => array_diff_assoc(array1,array2,...) Function
// Note :: we need to consider any keyname and value (just for assoc array)

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>"; // [b] => yellow [d] => green
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>"; // [b] => green

// => array_diff_key(array1,array2,...) Function
// Note :: we need to consider any keyname and value (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blues","d"=>"green","f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>"; // [d] => green [f] => pink
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>"; // [e] => orange


// => array_intersect(array1,array2,...) Function
// Note :: we don't need to consider kayname
$num1 = [10,20,30,60,70,80];
$num2 = [10,20,30,40,50,90,80];
echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>"; // [0] => 10 [1] => 20 [2] => 30 [5] => 80
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>"; // [0] => 10 [1] => 20 [2] => 30 [6] => 80

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["a"=>"red","f"=>"green","d"=>"orange"];
echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>"; // [a] => red [b] => green
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>"; // [a] => red [f] => green


// => array_fill(startindex,count,value) Function
echo "<pre>".print_r(array_fill(0,5,"green"),true)."</pre>"; // [0] => green [1] => green [2] => green [3] => green [4] => green
echo "<pre>".print_r(array_fill(2,5,"blue"),true)."</pre>"; // [0] => green [1] => green [2] => green [3] => green [4] => green

// => array_fill_keys(keys,value) Function
$keys = ["a","b","c","d"];
$values = ["red","green","blue","pink"];
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>"; // [a] => pink [b] => pink [c] => pink [d] => pink
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>";

// => array_key_exists(key,array) Function (just for assoc array)

$operators = ["mpt"=>"ftth","ooredoo"=>"broadband"];

if(array_key_exists("mpt",$operators)){
	echo "Key exists";
}else{
	echo "Key does not exists";
}

// => arrray_merge(array1,array2,...) Function
$arr1 = ["red","green"];
$arr2 = array("blue","yellow");
$arr3 = ["orange","violet"];
echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>";
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>";


// => aray_keys(array) Function
// => array_keys(array,value)
// => array_keys(array,value,strict)

$phones = ['mpt'=>'ftth','ooredoo'=>'broadband','telenor'=>'wifi'];

echo "<pre>".print_r(array_keys($phones),true)."</pre>"; // 
echo array_key($phones)[1]; // ooredoo

echo "<pre>".print_r(array_keys($phones,"broadband"),true)."</pre>"; // ([0] => ooredoo)
echo array_key($phones,"broadband")[1]; // ooredoo

$numbers = [10,20,30,"10"];
echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>"; // 
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>"; // 

echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>"; // 
echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>"; // 

echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>"; // 
echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>"; // 

// => array_map(callback,array1,array2,array3,...) Function

$males = ["tun tun","aung aung","kyaw kyaw","thura","zaw zaw"];
$females = ["hla hla","su su","nu nu","yu yu","thida"];

function gendorone($name){
	return ($male." & ".$females);
}

echo "<pre>".print_r(array_map($genderone,$males),true)."</pre>"; // 
echo "<pre>".print_r(array_map($gendertwo,$males,$females),true)."</pre>"; // 


// => sort(array) Function

$cars = ["volvo","bmw","toyota","mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>";

$numbers = [10,50,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>";


// => array_multisort(array) Function

$carsbrands = ["volvo","bmw","toyota","mazda","suzuki"];
array_multisort($cars);
echo "<pre>".print_r($cars,true)."</pre>";

$luckynumbers = [10,50,"80",90,35,"100",130,"250",70];
array_multisort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>";


// => array_reverse(array) Function

$vehicles = ["volvo","bmw","toyota","mazda","suzuki"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>";

$winnumbers = [10,50,"80",90,35,"100",130,"250",70];
sort($winnumbers);
echo "<pre>".print_r(array_reverse($winnumbers),true)."</pre>";

// => array_pad(array,length,value) Function

$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";

// => array_reduce(array,callback,initial) Function

$nums = [10,"20",30];

function calfun($total,$val){
	return $total += $val;
}

echo array_reduce($nums,"calfun",0); // 60

// array_search(value,array) Function
$myarrs = ["a","b","c","d","e"];
echo array_search("d",$myarrs); // 3

$myarrs = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"black","e"=>"blue"];
echo array_search("green",$myarrs); // b



// => array_pop(array) Function

$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>".print_r($colors,true)."</pre>"; // ([0] => red [1] => green)

// => array_unshift(array,value1,value2,...) Function

$colors = ["red","green","blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>"

$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

// => array_push(array,value1,value2,...) Function

$colors = ["red","green","blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";














?>