<?php
function add($x, $y){
    if(is_string($x) && is_string($y)){
        return $x.$y;
    }
    if(is_numeric($x) && is_numeric($y)){
        return $x+$y;
    }
}

echo add(1, "Help")
?>