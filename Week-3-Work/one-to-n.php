<?php
$count = 1;
$sum = 0;
function add_to_n($n){
    if($count == $n){
        return $sum;
    } else{
        $sum = ($sum + $count);
        $count = ($count + 1);
        add_to_n($n);
    }
}
echo add_to_n(3);
?>