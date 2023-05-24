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
