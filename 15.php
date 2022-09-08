<?php

class Parent
{
    public function __construct()
    {
    }
}

class Child extends Parent
{
    public function __construct()
    {
        parent::__construct();
        echo "This is the constructor"
    }
}    

?>
