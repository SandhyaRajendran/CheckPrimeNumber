<?php

function primeOrNot($num){
    for($i=2;  $i<=$num-1; $i++){
        // print_r($i);
        if($num % $i == 0){
            $setTrue = true;
        }
    }

if(isset($setTrue)){
    echo "it is not a prime number" .$num."\n";
}
else{
    echo "it is a prime number". $num."\n";
}
}
primeOrNot(5)."\n";

// primeOrNot(2)."\n";
// primeOrNot(3)."\n";
// primeOrNot(4)."\n";
// primeOrNot(5)."\n";
// primeOrNot(6)."\n";
// primeOrNot(7)."\n";
// primeOrNot(8)."\n";
// primeOrNot(9)."\n";
// primeOrNot(10)."\n";
