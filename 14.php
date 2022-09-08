<?php 

class Parent
{
    private $cnp;
}

class Child extends Parent
{
    public function afiseazaDetalii()
    {
        echo "$this->$cnp";
    }
}   
    
?>