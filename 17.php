<?php

class A
{
    public $a = 100;
}

$obj = new A();
$b = clone $obj; // first option
$b = $obj // second option
$b->x = 101;
print($b->x);// in both cases prints 101
print($a->x);// in first case gives error, meanwhile in the second case prints 101   

?>