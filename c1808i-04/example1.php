<?php 
//Associative Array = JSON = Javascript Object Notation
//http://localhost:80/c1808i-04/example1.php
$person = Array("name" => "Hoang", "age" => 30);
print_r($person);
//$_POST is also an Associative Array
echo "Person's details : Name =".$person["name"]."Age = ".$person["age"];
echo "Number of keys = ".count($person);
if(count($person) > 0) {
	echo "Object is not empty";
}
if(!empty($person)) {
	echo "Object22 is not empty";
}
//Numeric array
$fruits = ["orange", "lemon", "apple"];
echo "<br>First is : ".$fruits[0];
foreach($fruits as $hoaqua) {
	echo "<br>Fruit is : ".$hoaqua;
}
for($i = 0; $i < count($fruits); $i++) {
	echo "<br>Fruit22 is : ".$fruits[$i];
}
//unset($fruits);
$fruits2 = &$fruits;
$fruits2[1] = "lemon22";
var_dump($fruits);
define("PI", 3.1416);
echo "<br>PI = ".PI;
$x = 10;
function doSomething() {
	global $x;
	$x = 20;
}
doSomething();
echo "<br>x = ".$x;
$var1;
function sum() {
	static $var1 = 9;
	$var2 = $var1 + 12;
	echo "var 2 = ".$var2;
}
sum();
function factorial($num) {
	if($num === 0 || $num === 1) {
		return 1;
	} else {
		return $num*factorial($num-1);
	}
}
echo "factorial is : ".factorial(102);






























?>









