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

//other solution


function dateDiffInDays($date1, $date2) 

{

    $diff = strtotime($date2) - strtotime($date1);

     return abs(round($diff / 86400));

}

$date1 = "25-09-2020";

$date2 = "31-01-2021";

$dateDiff = dateDiffInDays($date1, $date2);

printf("Difference between two dates: ". $dateDiff . " Days ");

?>