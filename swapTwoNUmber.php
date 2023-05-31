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