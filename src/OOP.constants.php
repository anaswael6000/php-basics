<?php
class Goodbye{
    const LEAVING_MESSAGE = "goodbye old friend";
    function greet(){
        echo self :: LEAVING_MESSAGE;
    }

}
$obj = new Goodbye();
echo Goodbye :: LEAVING_MESSAGE;
echo "<br>";
$obj -> greet();
