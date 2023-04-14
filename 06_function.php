<?php
function registerUser(){
    echo 'user Registered successfully';
}
registerUser();
function userRegistration($user_name){
    echo $user_name.' '.'Registered successfully';
}
userRegistration('Adekunle');

function sum($n1,$n2){
    return $n1+$n2;
}
echo sum(5,9);

//you can set default values for an arguement so when the values are not passed, the default value can run
function sum2($n1 = 6,$n2 = 7){
    return $n1+$n2;
}
echo sum2();

//Anonynous functions
$subtract = function($n1,$n2){
    return $n1 - $n2;
};
echo $subtract(10,5);

//using arrow function
$multiply =fn($n1,$n2) => $n1 * $n2;
echo $multiply(4,5);