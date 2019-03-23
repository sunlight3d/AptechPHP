<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php
//http://localhost:80/c1808i-07/index.php
include "Person.php";
include "Calculation.php";

$mrHoang = new Person("Hoang", 20, "aaa@gmail.com");
$mrDanial = new Person("Danial", 30, "xxx@gmail.com");
$mrHoang->set_name("Hoang 2");
Person::$base_salary = 120;
var_dump($mrHoang::$base_salary);
var_dump($mrDanial::$base_salary);
echo "<h1>Sum 4 and 5 is :".Calculation::sum(4,5)." </h1>"
 ?>
</body>
</html>