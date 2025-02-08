<?php
$testarray = array(1,2,3,4);
unset($testarray[1]);
var_dump($testarray);

$testarray2 = array(1,2,3,4);
$isinarray = in_array(3, $testarray2);
var_dump($isinarray);
?>