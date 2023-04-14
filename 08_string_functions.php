<?php
echo 'hi there';

$string_word = 'hello HOPE you are doing okay?';

//Find position
echo strpos($string_word,'o'); //this finds the position of the first appearance o
echo strrpos($string_word,'o'); // this finds the position of the last occurrance of o

//Find the length of the string
echo strlen($string_word);

//Reverse a string 
echo strrev($string_word);

//Convert all string character to lowwer case
echo strtolower($string_word);

//convert string character to upper case
echo strtoupper($string_word);

//Uppercase the first character of each word
echo ucwords($string_word);

//replace string
echo str_replace('hello','hi',$string_word);

//return portion of a string / substring
echo substr($string_word,0,5); //returns from the first to the 5th character
echo substr($string_word,5); // this return charaters starting from the 5th position to the end

//starts with
if(str_starts_with($string_word,'hello')){
    echo 'YES.... hello!!';
}

//ENDS WITH
if (str_ends_with($string_word,'okay?')) {
    echo 'YES okay!';
}

//when dealing with script and you dont wnt it to take effect on the browser

$string_2 = '<script>alert(1)</script>';
//echo $string_2; // this will display an alert on the browser
echo htmlspecialchars($string_2);


//string formatting 
printf('%s likes %s and %s','Kunle','coding','learning');
printf('the total sum is= %d' ,10+20); //for double number 
printf('the division is =%f ',20/10); // for float number 