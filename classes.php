<?php

namespace test;

interface Calculator1 
{
    public static function calculate($x, $y);
}


class addition implements Calculator1
{
    public static function calculate($x, $y)
    {
        echo $x + $y . "<br>";
    }
}

class division implements Calculator1
{
    public static function calculate($x, $y)
    {
        echo $x / $y . "<br>";
    }
}

class multiplication implements Calculator1
{
    public static function calculate($x, $y)
    {
        echo $x * $y . "<br>";
    }
}

class myclass
{
    //
}


function check(array $classes = [])
{
    foreach ($classes as $class)
    {
        if ($class === myclass::class) {
            continue;
        }
        $class::calculate(10, 2);
    }
    print_r($classes);
    echo "<br>";
    foreach ($classes as $class)
    {
        $obj = new $class;
        if ($obj instanceof Calculator1)
        {
            echo "The class is an instance of the Calculator1 interface" . "<br>";
        }
        else
        {
            echo "The class is not an instance of the Calculator1 interface" . "<br>";
        }
    }
}

check([addition::class, division::class, multiplication::class, myclass::class]);
// check(["test\addition", "test\division", "test\multiplication", "test\myclass"]);