<?php

echo "First instruction:";
for ($i = 0; $i < 99; $i++) {
    echo "$i";
    if ($i % 5 == 0) break;
}

echo "Second instruction:";
for ($i = 0; $i < 99; $i++) {
    if ($i % 5 != 0) {
        echo "$i";
    }
}

?>