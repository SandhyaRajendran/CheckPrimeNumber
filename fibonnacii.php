<?php

//Write a PHP Program to generate Fibonacci series?
//first method
$userValue = (int)readline("Enter a number : ");
echo "userValue";
echo $userValue."\n";
$startingValue  = 0;
$secondValue = 1;
echo $startingValue."\n";
echo $secondValue."\n";

$nextValue = $startingValue + $secondValue;

for ($i=1; $i < $userValue; $i++) { 
    # code...
    // print_r($userValue);
    echo $nextValue."\n";

    $startingValue = $secondValue;
    $secondValue = $nextValue;
    $nextValue = $startingValue + $secondValue;
}
// echo $nextValue."\n";


//second method
// it prints the value inbetween the given value if i give 10 within 10 it shows the output 0,1,2,3,5,8

$fromUser = (int)readline("Enter a number : ");
$n1 = 0;
$n2 = 1;
$nextTerm = $n1+$n2;
echo $n1."\n";
echo $n2."\n";
while ($nextTerm <= $fromUser) {
    echo $nextTerm."\n";
    $n1 = $n2;
    $n2 = $nextTerm;;
    $nextTerm = $n1+$n2;
}
