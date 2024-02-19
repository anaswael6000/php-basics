<?php
namespace test;
class myclass{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function echo_name(){
        echo $this->name;
    }
    static function greet(){
        echo "hello, world" . "<br>\n";
    }
}

$anas = new myclass("anas");
echo $anas->name . "<br>\n";

myclass :: greet();
