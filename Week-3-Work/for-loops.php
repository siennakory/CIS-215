<?php
$samplearray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
$myarray = array();
foreach($samplearray as $mycount){
    if(($mycount % 2) == 0){
        array_push($myarray, $mycount);
    }
}
var_dump($myarray);
?>