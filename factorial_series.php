<?php
$firstValue = (int)readline("Enter a value : ");
$secondvalue = $firstValue;
while($firstValue > 1){
  $firstValue--;
  $secondvalue = $secondvalue * $firstValue;
  echo("Your output step by step :");
  echo($firstValue." ".$secondvalue."\n");
}

echo("Your final output is : ");
echo($secondvalue."\n");

//= 479001600