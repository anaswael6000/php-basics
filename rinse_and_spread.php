<?php

// $arr1 = [1, 2, 3];

// $arr2 = [...$arr1, 4, 5];

// print_r($arr2);

$object = new class implements IteratorAggregate {
    public $amount = 3;
    public $price = 38;
    public $code = "dkjs";

    public function getIterator()
    {
        return new ArrayIterator($this);
    }
};

$amount = [...$object];
print_r($amount);