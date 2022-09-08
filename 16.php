<?php

 class Parent
 {
     public function afiseazaDetalii()
     {
         print(" afiseazaDetalii parinte ");
     }
 }
 
 class Child extends Parent
 {
     public function afiseazaDetalii()
     {
        parent::afiseazaDetalii();
        print(" afiseazaDetalii copil ");
     }
 }   
 
 $child = new Child();
 $child->afiseazaDetalii();

?>