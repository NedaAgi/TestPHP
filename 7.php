<?php

function getType($value) {

    switch(gettype($value)) {
        case "string":
            echo "Tip String";
            break;
        case "integer":
            echo "Tip Intreg";
            break;
        case default:
            echo "Tip Default";
    }
}

$string = "example";
getType($str);

$integer = 1;
getType($integer);

$boolean = true;
getType($boolean);

?>