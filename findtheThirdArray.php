<?php
//You have two arrays like the following. One contains field labels, the other contains field values. Write a php program to output the third array.
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// want to output
// $keysAndValues = array(
//     "first"=>"dinosaur",
//     "second"=>"pig",
//     "third"=>"platypus"
// );


$keysAndValues = array_combine($keys,$values);

print_r($keysAndValues);