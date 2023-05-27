<?php
$userValue = readline("Enter a number : ");
$output;

for ($i=1; $i <= 15; $i++) { 
    $output =  $userValue * $i;
    // echo $output;
    echo $userValue." * ".$i." = ".$output."\n"; 
}