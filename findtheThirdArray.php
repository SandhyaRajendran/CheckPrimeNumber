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





//other way
$keysAndValues = array();
$keysAndValues[ $keys[ "field1" ] ] = $values[ "field1value" ];
$keysAndValues[ $keys[ "field2" ] ] = $values[ "field2value" ];
$keysAndValues[ $keys[ "field3" ] ] = $values[ "field2value" ];
// or

$keysAndValues = array();
foreach( array( 1, 2, 3 ) as $index ) {
    $keysAndValues[ $keys[ "field$index" ] ] = $values[ "field" . $index . "value" ];
}
// or

$keysAndValues = array_combine( array_values( $keys ), array_values( $values ) );
