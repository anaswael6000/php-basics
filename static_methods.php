<?php
class Myclass{
    public static function greet() {
        echo "hello, world";
    }
    const GREET = "hello";
}

Myclass::greet();
echo "<BR>";
echo Myclass::GREET;
