<?php

class evenNumbers implements Iterator
{
    private $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }
    
    public function rewind()
    {
        reset($this->items);
    }

    public function valid()
    {
        return (current($this->items) != null) ? true : false;
    }

    public function current()
    {
        if (current($this->items) % 2 !== 0) return;
        return current($this->items);
    }

    public function key()
    {
        return key($this->items);
    }
    
    public function next()
    {
        next($this->items);
    }
}

$array = [3, 6, 29, 8, 389, 29, 2];
$onlyEvenNumbers = new evenNumbers($array);

foreach($onlyEvenNumbers as $evenNumber)
{
    echo "$evenNumber\n";
}