<?php
//Write a PHP program to convert string to uppercase without using the library function.

<?php
//function definition
//this function accepts a string/text, converts
//text to uppercase and return the uppercase converted string
function upperCase($str)
{
    $chars  = str_split($str);
    $result = '';
    
    //loop from 0th character to the last character
    for ($i = 0; $i < count($chars); $i++) {
        //extracting the character and getting its ASCII value
        $ch = ord($chars[$i]);
        
        //if character is a lowercase alphabet then converting 
        //it into an uppercase alphabet
        if ($chars[$i] >= 'a' && $chars[$i] <= 'z')
            $result .= chr($ch - 32);
        
        else
            $result .= $chars[$i];
        
    }
    //finally, returning the string
    return $result;
}

//function calling
$text = "hello world";
echo upperCase($text);
echo "<br>";

$text = "Hello world!";
echo upperCase($text);
echo "<br>";

$text = "Hello@123.com";
echo upperCase($text);
echo "<br>";

?>

//code explanation
// We convert the string ($str) into an array of characters ($chars)
//  then calculate their ASCII value using ord() function. Since we know that in ASCII,
//   the Upper Case characters come exactly 32 places before the lower case equivalent,
//    we subtract 32 from the ASCII value
//  and then convert it back to the character using the chr() function.
//  The output is stored in the $result variable.