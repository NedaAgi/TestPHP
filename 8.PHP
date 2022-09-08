<?php

$arr = ["unu", "doi", "trei"];

if (count($arr) <= 3 and ! array_key_exists(3,$arr)) {
    echo "True";
} else {
    echo "False";
}

if ($arr[2] == "doi") {
    echo "Two";
} elseif ($arr[2] == "trei") {
    echo "Three";
}

?>