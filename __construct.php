<?php
class Fruits{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}
    $apple = new Fruits("Apple", "red");
    $mango = new Fruits("Mango", "yellow");

    echo $apple -> get_name() . "<br>";
    echo $apple -> get_color() . "<BR>";

    echo $mango -> get_name() . "<br>";
    echo $mango -> get_color() . "<BR>";

