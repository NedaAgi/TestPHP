<?php
echo "For loop result:";
for ($i = 0; $i < 99; $i++) {
    echo  "$i";
}

echo "While loop result:";
$i = 0;
while ($i < 99) {
    echo "$i";
    $i++;
}

echo "Do...while loop result:";
$i = 0;
do {
    echo "$i";
    $i++;
} while ($i < 99);

echo "Foreach loop result:";
foreach(range(0,99) as $i) {
    echo "$i";
}
?>
