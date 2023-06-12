<?php

// //Write PHP program to sort an integer array in ascending and descending order
//assending order
$values = [12,17,0,78,-5];
$newArray = [];

if(arrSort($values)){
    echo "it is a big number";
}
else{
    do {
        for ($k=0; $k < (count($values)-1); $k++) { 
            if($values[$k] < $values[$k+1]){
                $tempvalue = $values[$k+1];
                $values[$k+1] = $values[$k];
                $values[$k] = $tempvalue;
                array_push($newArray,$values);
            }
            
        }
    } while (!arrSort($values));
    print_r($newArray);
}
function arrSort($values){
    for ($i=0; $i < (count($values)-1); $i++) { 
        if($values[$i] < $values[$i+1]){
            return false;
        }
    }
    return true;
}


//desending order

$stored = [];

if(arrdescSort($values)){
    echo "all are descending order";
}
else{
    do{
        for ($i=0; $i < count($values) -1; $i++) { 
            if($values[$i] > $values[$i + 1]){
                $store = $values[$i+1];
                $values[$i+1] = $values[$i];
                $values[$i] = $store;
                array_push($stored,$values);
            }
        }
    }while (! arrdescSort($values)) ;
    print_r($stored);
    
}

function arrdescSort($values){
    for ($i=0; $i < count($values)-1; $i++) { 
        # code...
        if($values[$i] > $values[$i+1]){
            return false;
        }
        return true;
    }
}

//other way


//declaring & initializing array of integers
$array = array(10, 80, 100, 11, 22, 21, 19, 10, 88, 89);

//sorting array in ascending order
sort ($array);

//printing array elements after sorting              
foreach( $array as $num ){
    echo $num."\n";
}
?>

PHP code for sorting array in descending order

<?php
//declaring & initializing array of integers
$array = array(10, 80, 100, 11, 22, 21, 19, 10, 88, 89);

//sorting array in descending order
rsort ($array);

//printing array elements after sorting              
foreach( $array as $num ){
    echo $num."\n";
}
?>

