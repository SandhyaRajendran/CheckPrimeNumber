<?php
$giveInput = (int)readline("Please Enter a Number :");

function reverseANumbers($givenedInput){
    // echo $givenedInput;
    
    echo "Your number is ".$givenedInput."\n";
    $splitTheNumbers = str_split($givenedInput);
    for ($i=count($splitTheNumbers)-1; $i >= 0  ; $i--) { 
        echo $splitTheNumbers[$i];
    }    
    echo "\n";
}

reverseANumbers($giveInput);