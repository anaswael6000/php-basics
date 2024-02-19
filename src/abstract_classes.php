<?php

abstract class cars{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function define();
}

class volva extends cars{
    public function define(){
        echo "proud to be swedish" . " my name is $this->name" . "<br>";
    }
}

class audi extends cars{
    public function define(){
        echo "Choose German craftsmanship" . " my name is $this->name" . "<br>";
    }
}

$volva = new volva("Volva");
$audi = new audi("Audi");

$volva -> define();
$audi -> define();
