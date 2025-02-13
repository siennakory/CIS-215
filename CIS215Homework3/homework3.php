<?php

function main(){
    whileEchoTwoThree();

    echo " .......... ";

    forEchoTwoThree();

    echo " .......... ";

    whileEvenArray(10);

    echo " .......... ";

    forEvenArray(10);

    echo " .......... ";

    randomValues();

    echo " .......... ";

    $myarray = array("Justin", "Clancy", "Emily", "Justin", "David", "Bob");
    arrayWipe($myarray, "Justin");
};

/*
whileEchoTwoThree uses a while loop to check if each number in an array is divisible by 2 and/or 3.
If the number is divisible by 2 and/or 3 it will echo the number.
The loop iterates through the array using the $indexcount variable to check each index.
*/
function whileEchoTwoThree(){
    $array30 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
    $indexcount = 0;

    while ($indexcount < 30){
        if (($array30[$indexcount] % 2) == 0){
            echo ($array30[$indexcount] . " ");
        } elseif (($array30[$indexcount] % 3) == 0){
            echo ($array30[$indexcount] . " ");
        };
        $indexcount += 1;
    };
};

/*
forEchoTwoThree uses a for loop to check if each number in an array is divisible by 2 and/or 3.
If the number is divisible by 2 and/or 3 it will echo the number.
A foreach type loop is used to assign the current index to a variable to be used in an if block as
the loop iterates through the provided array.
*/
function forEchoTwoThree(){ #This was the easier of the two loop types for this problem.
    $array30 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);

    foreach ($array30 as $num){
        if(($num % 2) == 0){
            echo ($num . " ");
        } elseif (($num % 3) == 0){
            echo ($num . " ");
        };
    };
};

/*
whileEvenArray uses a while loop to generate an array of all even numbers between 1 and $n.
It uses the $count variable to check each number until it reaches $n, using array_push to add any that are
divisible to $evenarray. The function then uses var_dump to display the generated array for testing.
The function returns $evenarray.
*/
function whileEvenArray($n){
    $count = 1;
    $evenarray = array();

    while ($count <= $n){
        if (($count % 2) == 0){
            array_push($evenarray, $count);
        };
        $count += 1;
    };
    var_dump($evenarray);
    return $evenarray;
};

/*
forEvenArray uses a for loop to generate an array of all even numbers between 1 and $n.
It uses range to generate an array of every variable from 1 to $n. It then uses a foreach
type loop to iterate through and check each number in that array, using array_push to add any that are
divisible by 2 to $evenarray. The function then uses var_dump to display the generated array for testing.
The function returns $evenarray.
*/
function forEvenArray($n){
    $basearray = range(1, $n);
    $evenarray = array();

    foreach ($basearray as $num){
        if (($num % 2) == 0){
            array_push($evenarray, $num);
        };
    };
    var_dump($evenarray);
};

/*
randomValues uses array_rand to randomly select two keys from an array of fruit names.
These keys are then used to generate a second array ($endarray) with the values from the selected keys in the
first array ($randomarray). The function then uses var_dump to display the generated array for testing.
The function returns $endarray.
*/
function randomValues(){
    $randomarray = array("apple", "orange", "banana", "pear", "peach");
    $randomvalue = array_rand($randomarray, 2); 
    /*
    array_rand randomly selects a key from the array provided in the first argument as an integer,
    or a number of keys dictated by the second argument as an array.
    */
    $endarray =  array($randomarray[$randomvalue[0]],$randomarray[$randomvalue[1]]);
    var_dump($endarray);
    return $endarray;
};

/*
arrayWipe removes all instances of a provided value from a provided array.
It uses a foreach loop to iterate through each value in the provided array and check that it is
not equal to the provided value with an if statement. If the value is not equal to the wiped value,
it will use array_push to add the value to the new array ($wipedarray).
This function returns $wipedarray.
*/
function arrayWipe($basearray, $wipe){
    $wipedarray = array();
    foreach ($basearray as $value){
        if ($value != $wipe){
            array_push($wipedarray, $value);
        };
    };
    var_dump($wipedarray);
    return $wipedarray;
};

function fizzBuzz(){

};

main();

?>