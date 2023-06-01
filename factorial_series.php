<?php
// $firstValue = (int)readline("Enter a value : ");
// $secondvalue = $firstValue;
// while($firstValue > 1){
//   $firstValue--;
//   $secondvalue = $secondvalue * $firstValue;
//   echo("Your output step by step :");
//   echo($firstValue." ".$secondvalue."\n");
// }

// echo("Your final output is : ");
// echo($secondvalue."\n");

//= 479001600


//other way


function Factorial($number){

    if($number <= 1){  


        return 1;  

    }  

    else{  
        

        return $number * Factorial($number -1);  

    }  

}
$number = 5;

 echo Factorial($number)."\n";

// $fact = Factorial($number);

// echo "Factorial = $fact";
// echo "Factorial". Factorial($number);

?>