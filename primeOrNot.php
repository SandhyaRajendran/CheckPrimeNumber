<?php

function primeOrNot($num){
    if($num < 0){
        echo "please enter the value more than 1"."\n";
    }
    else{
        for($i=2;  $i<=$num-1; $i++){
            // print_r($i);
            if($num % $i == 0){
                $setTrue = true;
            }
        }
        if(isset($setTrue)){
            echo "it is not a prime number"." " .$num."\n";
        }
        else{
            echo "it is a prime number"." ". $num."\n";
        }
        }
    }

primeOrNot(1)."\n";

// primeOrNot(2)."\n";
// primeOrNot(3)."\n";
// primeOrNot(4)."\n";
// primeOrNot(5)."\n";
// primeOrNot(6)."\n";
// primeOrNot(7)."\n";
// primeOrNot(8)."\n";
// primeOrNot(9)."\n";
// primeOrNot(10)."\n";


//other way

function primeCheck($number){

    if ($number == 1)

    return 0;

    for ($i = 2; $i <= $number/2; $i++){

        if ($number % $i == 0)
    
            return 0;

    }

    return 1;

}

$number = 17;

$flag = primeCheck($number);

if ($flag == 1)

    echo "Prime";

else

    echo "Not Prime";

