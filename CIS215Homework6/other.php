<?php

function main(){
    $radio = $_GET["radio"];

    $addDelete = check($radio);

    returnFunc($addDelete);
};

function check($radio){
    if ($radio == "other"){
        return "add";
    } else {
        return "delete";
    }
};

function returnFunc($addDelete){
    $return = array(
        "addDelete" => $addDelete
    );

    echo json_encode($return);
};

main();

?>