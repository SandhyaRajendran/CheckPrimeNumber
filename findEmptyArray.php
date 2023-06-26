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


//

// Declare an array and initialize it
$non_empty_array = array('URL' => 'https://www.geeksforgeeks.org/');

// Declare an empty array
$empty_array = array();

// Condition to check array is empty or not
if(!empty($non_empty_array))
    echo "Given Array is not empty <br>";

if(empty($empty_array))
    echo "Given Array is empty";

//Declare an empty array
$empty_array = array();

// Function to count array
// element and use condition
if(count($empty_array) == 0)
    echo "Array is empty";
else
    echo "Array is non- empty";
//<?php

// Declare an empty array
$empty_array = array();

// Use array index to check
// array is empty or not
if( sizeof($empty_array) == 0 )
    echo "Empty Array";
else
    echo "Non-Empty <?php

    // Declare an array and initialize it
    $non_empty_array = array('URL' => 'https://www.geeksforgeeks.org/');
    
    // Declare an empty array
    $empty_array = array();
    
    // Condition to check array is empty or not
    if(!empty($non_empty_array))
        echo "Given Array is not empty <br>";
    
    if(empty($empty_array))
        echo "Given Array is empty";
    ?>
    
    Using count Function
    
    <?php
    
    // Declare an empty array
    $empty_array = array();
    
    // Function to count array
    // element and use condition
    if(count($empty_array) == 0)
        echo "Array is empty";
    else
        echo "Array is non- empty";
    ?>
    
    Using sizeof() function:
    <?php
    
    // Declare an empty array
    $empty_array = array();
    
    // Use array index to check
    // array is empty or not
    if( sizeof($empty_array) == 0 )
        echo "Empty Array";
    else
        echo "Non-Empty Array";
    ?>
    Array";
?>