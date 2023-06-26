<?php


// What will 
$x;
//  be equal to after the statement 
$x = 3 + "15%" + "$25";
// ?

/////////
// The correct answer is 18.

// Here’s why:

// PHP supports automatic type conversion based on the context in which a variable or value is being used.

// If you perform an arithmetic operation on an expression that contains a string, that string will be interpreted as the appropriate numeric type for the purposes of evaluating the expression. So, if the string begins with one or more numeric characters, the remainder of the string (if any) will be ignored and the numeric value is interpreted as the appropriate numeric type. On the other hand, if the string begins with a non-numeric character, then it will evaluate to zero.

// With that understanding, we can see that "15%" evaluates to the numeric value 15 and "$25" evaluates to the numeric value zero, which explains why the result of the statement $x = 3 + "15%" + "$25"is 18 (i.e., 3 + 15 + 0).

// Please note that as of PHP 7.2, this code produces an error.