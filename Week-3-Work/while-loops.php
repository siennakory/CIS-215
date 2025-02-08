<?php
$count = 1;
$myarray = array();

do{
    if(($count % 2) == 0){
        array_push($myarray, $count);
    }
    ++$count;
} while($count <= 20);

var_dump($myarray);
?>