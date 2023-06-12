<?php

// What is the problem with the code below? What will it output? How can it be fixed?


$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);

//answer
Here the second variable value is integer $reference['val2'] so here the
array_merge will not succeed because array_merge method will succeed for arrays only

But here if we want the output as like altogether we can use only variable name instead 
of using variable key example: print_r($referenceTable); after declaration of all 
varible this will shows the ouput like all together

Array
(
    [val1] => Array
        (
            [0] => 1
            [1] => 2
        )

    [val2] => 3
    [val3] => Array
        (
            [0] => 4
            [1] => 5
        )

)

// or 

// if we want this array in another array by using array_merge we can but here
// same don't use keys with the declared variable.

// So we can apply like this

$testArray = array();

$testArray = array_merge($testArray, $referenceTable);
var_dump($testArray);

Output will give like this

array(3) {
  ["val1"]=>
  array(2) {
    [0]=>
    int(1)
    [1]=>
    int(2)
  }
  ["val2"]=>
  int(3)
  ["val3"]=>
  array(2) {
    [0]=>
    int(4)
    [1]=>
    int(5)
  }
}



//other way
array(2) { [0]=> int(1) [1]=> int(2) }
NULL
NULL

You may also see two warnings generated, similar to the following:
Warning: array_merge(): Argument #2 is not an array
Warning: array_merge(): Argument #1 is not an array

The issue here is that, if either the first or second argument to 
array_merge()
 is not an array, the return value will be 
NULL
. For example, although one might reasonably expect that a call such as 
array_merge($someValidArray, NULL)
 would simply return 
$someValidArray
, it instead returns 
NULL!
 (And to make matters worse, this is not documented well at all in the PHP documentation.)

As a result, the call to 
$testArray = array_merge($testArray, $referenceTable['val2'])
 evaluates to 
$testArray = array_merge($testArray, 3)
 and, since 
3
 is not of type 
array
, this call to 
array_merge()
 returns 
NULL
, which in turn ends up setting 
$testArray
 equal to 
NULL
. Then, when we get to the next call to 
array_merge()
, 
$testArray
 is now 
NULL
 so 
array_merge()
 again returns 
NULL
. (This also explains why the first warning complains about argument #2 and the second warning complains about argument #1.)

The fix for this is straightforward. If we simply typecast the second argument to an 
array
, we will get the desired results. The corrected 
array_merge()
 calls would therefore be as follows:
$testArray = array_merge($testArray, (array)$referenceTable['val1']);
var_dump($testArray);
$testArray = array_merge($testArray, (array)$referenceTable['val2']);
var_dump($testArray);
$testArray = array_merge($testArray, (array)$referenceTable['val3']);
var_dump($testArray);

which will yield the following output (and no warnings):
array(2) { [0]=> int(1) [1]=> int(2) } 
array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } 
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
