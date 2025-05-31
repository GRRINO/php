<?php 

$products = [
    "name"=>"yan",
    "apple"=>"green",
    "age"=>1,
    "boolean"=>"true",

];

// sort($products); // normal sorting for ( value )
// rsort($products); // reverse sorting for ( value )

// ksort($products); // normal sorting for  ( key )
krsort(($products)); // reverse sorting for ( key )

print_r($products);