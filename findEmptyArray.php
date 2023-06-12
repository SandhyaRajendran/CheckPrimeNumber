<?php
// Check if an array is empty or not in PHP
$array = [12,34,56,67,89];

if($array == []){
    echo "The array is empty ";
    print_r($array);
}
else{
    echo "The array is not empty ";
    print_r($array);
}

//other way

<?php

$input = [1,2,4];
function arrayCheck($getInput){
    if($getInput){
        return "It's an array";
    }
    else{
        return "It's empty array";
    }
}
echo arrayCheck($input);
