<?php
//two different ways 
//the input from the user
$fromDate = readline("Enter from date: ");
$toDate = readline("Enter to date: ");
 
$days = (strtotime($fromDate) - strtotime($toDate)) / (60 * 60 * 24); 
echo floor($days)." days"."\n";

// the input from we assign 
function noOfDays($fromDate,$toDate){
  if($fromDate == $toDate){
    echo "same dates please enter a different date";
  }
  else{
    $days = (strtotime($fromDate) - strtotime($toDate)) / (60 * 60 * 24); 
    echo floor($days)." days"."\n";
  }
}
noOfDays('2020-11-25','2020-11-20');