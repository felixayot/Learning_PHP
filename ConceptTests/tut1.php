<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Tutorials</title>
</head>
<body>
	
<?php

// Variables
$name =  "John Doe";
$age = 35;
$occupation = "Software Engineer";
echo "<div>";
echo "<p>"."Hello there!\nMy name is $name and I'm $age years old. My full time occupation is a $occupation.\nI'm so glad to meet you.\n"."</p>";

// Functions
function add($a, $b) {
	return $a + $b;
}

function subtract($a, $b) {
	return $a - $b;
}

function multiply($a, $b) {
	return $a * $b;
}

function divide($a, $b) {
	return $a / $b;
}


$a = 150;
$b = 30;
$sum = add($a, $b);
$diff = subtract($a, $b);
$prod = multiply($a, $b);
$res = divide($a, $b);
echo "OUTPUT METHOD 1";
echo "<br/>";
echo "=================";
echo "<br/>";
echo "<br/>";
echo "\nSum of $a and $b equals $sum\n";
echo "<br/>";
echo "Difference of $a and $b equals $diff\n";
echo "<br/>";
echo "Product of $a and $b equals $prod\n";
echo "<br/>";
echo "Quotient of $a and $b equals $res\n";
echo "<br>" . "<br>";
echo "\nOUTPUT METHOD 2\n";
echo "<br/>";
echo "=================\n";
echo "<br/>";
echo "<br/>";
echo "\nSum of $a and $b:" . " " . add($a, $b) . "\n";
echo "<br/>";
echo "Difference of $a and $b:" . " " . subtract($a, $b) . "\n";
echo "<br/>";
echo "Product of $a and $b:" . " " . multiply($a, $b) . "\n";
echo "<br/>";
echo "Quotient of $a and $b:" . " " . divide($a, $b) . "\n\n";
echo "</div>";
echo "<br>";

$l1 = "Hello";
$l2 = "World";
echo $l1 . " " . $l2;
echo "<br>";
echo $l1 . " " . $l2 . "!";
echo "<br>";

// Variable Type casting
$var1 = 10;
echo var_dump($var1);
echo "<br>";
$var2 = (string) $var1;
echo var_dump($var2);
$var3 = "Albert Einstein";
$var4 = " Is CTL^D == EOF";
echo "<br>";
echo $var1 . "<br>", $var2 . "<br>", $var3 . "<br>", $var4 . "<br>";
echo "<br>";

?>
</body>
</html>

