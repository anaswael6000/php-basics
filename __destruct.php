<?php
class Fruits{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct(){
        echo "The fruit is $this->name its color is $this->color" . "<br>";
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

