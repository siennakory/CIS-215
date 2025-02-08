<?php
function remove_value($x){
    $valuearray = array(1,2,3,4);
    if (in_array($x, $valuearray)){
        $valuelocation = array_search($x, $valuearray);
        unset($valuearray[$valuelocation]);
    }
    var_dump($valuearray);
}

remove_value(2);
?>