<?php
class Fruits{
    public $name;
    public $color;

    /*final keyword will generate an error*/function __construct($name, $color){
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
class mango extends Fruits{
    public $weight;
    function __construct($name, $color, $weight){
        $this -> name = $name;
        $this -> color = $color;
        $this -> weight = $weight;
    }
    function get_weight(){
        return $this -> weight;
    }
}
    $apple = new Fruits("Apple", "red");
    $mango = new mango("Mango", "yellow", 200);

    echo $apple -> get_name() . "<br>";
    echo $apple -> get_color() . "<BR>";

    echo $mango -> get_name() . "<br>";
    echo $mango -> get_color() . "<BR>"; // will generate an error
    echo $mango -> get_weight();

/*adding the final keyword will generate and error*/ class test1{
    // some code
}
class test2 extends test1{
    // if final word is set it will generate an error
}

