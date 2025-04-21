<?php
function main(){
    $password = $_GET["password"];
    $uppercase = "X";
    $lowercase = "X";
    $numbers = "X";
    $length8 = "X";
    $passwordsplit = chunk_split($password, 1, ",");
    $passwordarray = explode(",", $passwordsplit);

    $length8 = length($password);
    $uppercase = uppercase($passwordarray);
    $lowercase = lowercase($passwordarray);
    $numbers = numbers($password);
    returnfunc($uppercase, $lowercase, $numbers, $length8);
};

function length($password){
    if (strlen($password) >= 8){
        $length8 = ":D";
    } else {
        $length8 = "X";
    };

    return $length8;
};

function uppercase($passwordarray){
    $uppercount = 0;
    foreach ($passwordarray as $value){
        if (ctype_upper($value)){
            $uppercount++;
        };
    };

    if ($uppercount >= 1){
        $uppercase = ":D";
    } else {
        $uppercase = "X";
    };

    return $uppercase;
};

function lowercase($passwordarray){
    $lowercount = 0;
    foreach ($passwordarray as $value){
        if (ctype_lower($value)){
            $lowercount++;
        };
    };

    if ($lowercount >= 1){
        $lowercase = ":D";
    } else {
        $lowercase = "X";
    };

    return $lowercase;
};

function numbers($password){
    if (ctype_alpha($password)){
        $numbers = "X";
    } elseif (ctype_alnum($password)) {
        $numbers = ":D";
    };

    return $numbers;
};

function returnfunc($uppercase, $lowercase, $numbers, $length8){
    $message = "Uppercase: $uppercase | Lowercase: $lowercase | Numbers: $numbers | Length: $length8";

    $return = array(
        "message" => $message
    );

    echo json_encode($return);
};

main();

?>