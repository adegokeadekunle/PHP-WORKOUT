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
$arr4 = [...$arr1,...$arr3];  // you can also use the spread operator to add the arrays you need to add up

print_r($arr3);

//COMBINE ARRAYS
$color = ['yellow','green','red'];
$edibles = ['orange','vegetables','apple'];
$combined_color_edible = array_combine($color,$edibles); // this will pair the both arrays by using the first array as key and second array as value
print_r($combined_color_edible);

$keys = array_keys($combined_color_edible); //these will return the keys in the combind arrays
print_r($keys);

$values = array_values($combined_color_edible);// this will return the values in the combined array
print_r($values);

$flip = array_flip($combined_color_edible); //this will flip the keys as value and value as key i.e color take the position edible and vice-versa
print_r($flip);

//GETTING A RANGE
$numbers = range(1,10); // this will return numbers from 1 to 10
print_r($numbers);

//USING MAP FUNCTION
$newNumbers = range(1,20);
$map_to_string = array_map(function($newNumbers){
    // return "Number ${newNumbers}";
    return 'Number'.' '.$newNumbers;
},$newNumbers);
print_r($map_to_string); 

//FILTERING ARRAYS
$less_than = array_filter($newNumbers, fn($num) => $num <=5 );
print_r($less_than);

//USING REDUCE FUNCTION 
$sum = array_reduce($newNumbers , fn($carry,$num) => $carry + $num); // the carry holds an element of 0 so this add up numbers from 0 position
var_dump($sum);