<?php

// palindrome
function pallindrome($name)
{
$savedName = strrev($name);
if($name == $savedName)
{
echo $savedName ." is a palindeome" ."\n";

}
else{
echo $savedName ." is not a palindeome" ."\n";
}
}
pallindrome("rubber");
pallindrome("amma");
pallindrome("radar");
pallindrome("malayalam");


//other way 

// The program to find a string is palindrome or not is :



function Palindrome($number){ 

    $temp = $number; 

    $new = 0; 

    while (floor($temp)) { 

        $d = $temp % 10; 

        $new = $new * 10 + $d; 

        $temp = $temp/10; 

    } 

    if ($new == $number){ 

        return 1; 

    }

    else{

        return 0;

    }

} 

$original = 257752;

if (Palindrome($original)){ 

    echo "Palindrome"; 

}

else { 

echo "Not a Palindrome"; 

}

?> 