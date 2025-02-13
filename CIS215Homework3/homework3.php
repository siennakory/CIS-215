<?php

function main(){
    whileEchoTwoThree();

    echo " .......... ";

    forEchoTwoThree();
};

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