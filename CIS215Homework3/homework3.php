<?php

function main(){
    whileEchoTwoThree();

    echo " .......... ";

    forEchoTwoThree();
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
function forEchoTwoThree(){
    $array30 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);

    foreach ($array30 as $num){
        if(($num % 2) == 0){
            echo ($num . " ");
        } elseif (($num % 3) == 0){
            echo ($num . " ");
        };
    };
};

function loops2(){

};

function arrays(){

};

function functions(){

};

function fizzBuzz(){

};

main();

?>