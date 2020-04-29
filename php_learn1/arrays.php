<?php


//--------- Array types:

//      1-indexed
//     2 -associative
//     3 -multi dimensional

// ------------------Indexed :

$names  = array("a","b");
$names2  = ["c","d"];

//add more to array:
$names[2] = "c";

//to append at last

$names[]="last";

// echo $names[0];

// to print complete array
// print_r($names);

//to get array length:
// echo count($names);

//ceate random index
// $names[8] = "high index";
// print_r($names);
// echo " size of array is ".count($names);

//get array details
// var_dump($names);


////--------------- associative arrays:
 //these are just like dictionaries

//  $dict1 = array("name"=>"maheen","age"=>20);
//  $book = ["name"=>"harrypotter","author"=>"jk"];

//  echo print_r($dict1);
//  echo print_r($book);
//  echo $dict1['name'];

// var_dump($book);

// ---------------------- mulit dimensional array i.e nested array:

$mult  = [
    [1,2],
    [3,4],
];

echo "2nd array 1st value is ".$mult[1][0];


?>