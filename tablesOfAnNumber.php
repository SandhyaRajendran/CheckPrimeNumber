<?php
$userValue = readline("Enter a number : ");
$output;

for ($i=1; $i <= 15; $i++) { 
    $output =  $userValue * $i;
    // echo $output;
    echo $userValue." * ".$i." = ".$output."\n"; 
}

//other way

// The program in PHP to print a table of a number:


define('a', 9);   

for($i=1; $i<=10; $i++)   

{   

  echo $i*a;   

  echo '<br>';     

}  

