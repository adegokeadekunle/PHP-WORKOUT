<?php

$fruits = ['apple','orange','pear'];

//get length
echo count($fruits); // count function to get length of the array

//search array
var_dump(in_array('apple',$fruits)); //returns true or false if the value exist in the array

//ADDING TO AN ARRAY
$fruits[] = 'grape';
//or you can add this way
array_push($fruits,'mango','pawpaw','cashew'); //array_push function to add to the array
array_unshift($fruits,'coconut'); //array_unshift is used to add to the first element of the array 
print_r($fruits);
 
//REMOVE FROM AN ARRAY
array_pop($fruits); // takes out the last element in the array
array_shift($fruits); // takes out the first element from the array
unset($fruits[2]); // to remove a specific index in the element

print_r($fruits);

//CHUNCKS
$chunck_array = array_chunk($fruits,2); //the array_chunk function splits the array into 2 chuncks or depending on the chunk size 
print_r($chunck_array);

//CONCAT ARRAYS
$arr1 =[1,2,3,4];
$arr2 =[5,6,7,8];

$arr3 = array_merge($arr1,$arr2);
print_r($arr3);