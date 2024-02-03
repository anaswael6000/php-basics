<?php

$obj = new class extends parentclass implements parentinterface {
    public function test2(){
       echo "implements test2 method from interface";
    }
 };
$obj->test2();