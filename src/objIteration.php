<?php

class objIteration {
    
    public $var1 = "public";
    protected $var2 = "protected";
    private $var3 = "private";

    public function iterate()
    {
        echo "This will iterate through every property because it is inside the class" . "<br>\n";
        foreach ($this as $key => $value) {
            echo "$key => $value" . "<br>\n";
        }
    }

}

$obj = new objIteration();

echo "This will only iterate through public properties" . "<br>\n";
foreach ($obj as $key => $value) {
    echo "$key => $value" . "<br>\n";
}

echo "<br>\n";

$obj->iterate();

echo "<br>\n";

function printIterable($myiterable){

    if (is_iterable($myiterable)) {
        echo "objects are iterable" . "<br>\n";
    } else {
        echo "must iterate the iterator interface" . "<br>\n";
    }

    foreach ($myiterable as $key => $value) {
        echo "$key => $value" . "<br>\n";
    }
}

printIterable($obj);