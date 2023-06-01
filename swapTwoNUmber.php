<?php

//Write a PHP program to swap two numbers with third variable

//using third varible

// $a = 12;
// $b = 15;

// echo "first a  = ".$a."\n";
// echo "second b = ".$b."\n";

// $third =$a;
// $a = $b;
// $b = $third;


// echo "after storing a to another variable ".$third."\n";
// echo "after swapping a value =".$a."\n";
// echo "after swapping b value ="."$b.\n";

//Write a PHP program to swap two numbers without third variable

$a=12;  
$b=15;  
//using arithmetic operation  
$a=$a+$b;  
echo $a;
$b=$a-$b;
echo $b;  
$a=$a-$b;
echo $a;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  


$a=12;  
$b=15;  
// using arithmetic operation  
$a=$a*$b;  
echo $a;
$b=$a/$b;
echo $b;  
$a=$a/$b;
echo $a  ;
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  




//other way

$a = 45;  
$b = 78;  
// Swapping Logic  
$third = $a;  
$a = $b;  
$b = $third;  
echo "After swapping:<br><br>";  
echo "a =".$a."  b=".$b;  
?>  

Swap two numbers without using a third variable is done in two ways:

Using arithmetic operation + and ?

Example for (+ and -):

<?php  
$a=234;  
$b=345;  
//using arithmetic operation  
$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  
?>  

Using arithmetic operation * and /
Example for (* and /):

<?php  
$a=234;  
$b=345;  
// using arithmetic operation  
$a=$a*$b;  
$b=$a/$b;  
$a=$a/$b;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  
