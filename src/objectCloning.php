<?php

class person
{
    public $name;
    public $gender;
    public $job;

    public function changeName($name)
    {
        $this->name = $name;
    }
}

echo "Using the equal sign operator\n"; 

$name = "piers";
$piers1 = new Person();
$piers1->name = $name;
$piers2 = $piers1;

echo "piers's 2 name before changing the name of piers 1 is {$piers2->name}\n";

$piers1->changeName("rachel");

echo "piers's 2 name after changing the name of piers 1 is {$piers2->name}\n\n";

echo "Conclusion: The equal sign operator does no work in copying objects because that way objects refer to the same place in memory meaning that 
any change you will make to original or any of the copied objects will affect every other object\n\n";

echo "Using the clone keyword\n";

$name = "piers";
$piers3 = new Person();
$piers3->name = $name;
$piers4 = clone $piers3;

echo "piers's 4 name before changing the name of piers 3 is {$piers4->name}\n";

$piers3->changeName("rachel");

echo "piers's 4 name after changing the name of piers 3 is {$piers4->name}\n\n";

echo "Conclusion: clone allows for shallow copying\n\n";

echo "Using the clone keyword for deep copying\n";

$piers5 = new Person();
$piers5->name = "piers";
$piers3->name = $piers5;

$piers4 = clone $piers3;

echo "piers's 5 name in piers4 object before changing the name of piers 5 in piers3 object is {$piers4->name->name}\n";

$piers3->name->changeName("rachel");

echo "piers's 5 name in piers4 object after changing the name of piers 5 in piers3 object is {$piers4->name->name}\n";

echo "Conclusion the clone keyword does not work with deep copying when one of the original object's properties has a reference to another object\n\n";

class newPerson extends Person
{
    public function __clone()
    {
        $this->name = clone $this->name;
    }
}

echo "Using the clone keyword as well as the __clone magic method for deep copying\n";

$obj1 = new newPerson;
$obj2 = new Person;
$obj2->name = "piers";
$obj1->name = $obj2;

$obj3 = clone $obj1;

echo "{$obj3->name->name}\n";

$obj1->name->name = "rachel";

echo "{$obj3->name->name}\n\n";

echo "Conclusion the clone magic method allows for deep copy";