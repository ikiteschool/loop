<?php 
 
//reset() - Get the first element of the array
//array_pop() - It is used to delete or remove the last element of an array
//array_push() - It is used to insert one or more elements to the end of the array
//array_merge()
//array_combine()
//array_filter(array, callbackfunction, flag)
//array_count_value() - calculates the frequence of the elements of an array
//array_count - calculates the number of elements of an array
//array_key_exists - check key in the array
//array_splice - insert a new element in an array

//Different Sorting Functions


/*

array_merge() : It merges one or more than one array such that the value of one array appended at the end of first array and if the arrays have same strings key then the later value overrides the previous value for that key .

$name = array("best","interview","question");
$index = array("1","2","3");
$result = array_merge($name,$index);

array_combine() : It is used to create a new array by using the key of one array as keys and using the value of another array as values. The most important thing is using array_combine() that, number of values in both arrays should be same.

$name = array("best","interview","question");
$index = array("1","2","3");
$result = array_combine($name,$index);

*/

//$name = array("best","interview","question");//these items will be key
//$index = array("1","2","3"); //these will be values
//$result = array_combine($name,$index);
//print_r($result); //Array ( [best] => 1 [interview] => 2 [question] => 3 ) Facebook


$name = array("best","interview","question");
$index = array("1","2","3");
$result = array_merge($name,$index);
print_r($result);//Array ( [0] => best [1] => interview [2] => question [3] => 1 [4] => 2 [5] => 3 )


$array = array(1,3,4,4,5,6);

function myArray(int $var){
     return ($var & 1);//checks for odd number
 }

 //print_r(array_filter($array,"myArray"));

 //Getting the first element of an array

$arrayVar = array('Facebook','Google','Amazon');
//echo reset($arrayVar); 

/*
PHP only supports 3 types of arrays
1. Indexed - $size = array("Big","Medium","Short") or $size[0] = "Big", etc
2. Associative - Key value pairs
3. Multidimensional - Nested arrays
*/