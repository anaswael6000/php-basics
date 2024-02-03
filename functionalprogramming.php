<?php

// // pure first class function 
// function square($x)
// {
//     return $x * $x;
// }

// // Pure high order function
// function map($array, $callback)
// {
//     // Php passes variables by value by default so we don't need to create a separate array
//     foreach($array as &$element)
//     {
//         $element = $callback($element);
//     }
//     return $array;
// }

// $array0 = [1, 2, 3, 4, 5];
// $array1 = map($array0, 'square');
// print_r($array0);
// print_r($array1);

// echo "\n\n";

// // generator functions
// function countTo3()
// {
//     yield 1;
//     yield 2;
//     yield 3;
// }

// foreach(countTo3() as $number)
// {
//     echo "$number\n";
// }

// echo "\nLazy evaluation\n";

// // A copy of the default range function using lazy evaluation
// function xRange($start, $end, $step = 1)
// {
//     while($start <= $end)
//     {
//         yield $start;
//         $start += $step;
//     }
// }

// foreach(xRange(1, 7) as $number)
// {
//     if ($number % 2 == 0)
//     {
//         echo "$number\n";
//         break;
//     }
// }
// // Note we didn't have to create the entire range array

// echo "\nReturning functions as return values\n";

// function multiplier($x)
// {
//     return function ($y) use ($x)
//     {
//         return $x * $y;
//     };
// }

// $doubler = multiplier(2);
// echo $doubler(4) . "\n";

// $triple = multiplier(3);
// echo $triple(4) . "\n";

// partial function 

function partial($function, ...$args)
{
    return function (...$moreArgs) use ($function, $args)
    {
        return call_user_func_array($function, array_merge($args, $moreArgs));
    };
}

function add(int $a, int $b)
{
    return $a + $b;
}

$addFive = partial('add', 5);

$result = $addFive(11);
echo "$result\n"; // 30

// currying

// UnCurried
function calculateDistanceUnCurried($x1, $y1, $x2, $y2)
{
    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}

$result = calculateDistanceUnCurried(2, 0, 4, 0);
echo "{$result}\n";

// Curried
function calculateDistanceCurried($x1)
{
    return function ($y1) use ($x1)
    {
        return function ($x2) use ($x1, $y1)
        {
            return function ($y2) use ($x1, $y1, $x2)
            {
                return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
            };
        };
    };
}

$calculateDistanceFromPointA = calculateDistanceCurried(2);
$calculateDistanceToPointA = $calculateDistanceFromPointA(0);
$calculateDistanceFromPointB = $calculateDistanceToPointA(4);
$distanceToPointB = $calculateDistanceFromPointB(0);

echo "$distanceToPointB\n";

// Flexible currying
function FlexibleCurryingDistanceCalculation(...$args)
{
    $n = count($args);
    if ($n > 4) throw new Exception("In sufficient arguments");
    elseif ($n < 4)
    {
        return function(...$newArgs) use ($args)
        {
            return FlexibleCurryingDistanceCalculation(...array_merge($args, $newArgs));
        };
    }
    else
    {
        return sqrt(pow($args[2] - $args[0], 2) + pow($args[3] - $args[1], 2));
    }

}

$calculateDistanceFromPointA = FlexibleCurryingDistanceCalculation(0);
$calculateDistanceToPointA = $calculateDistanceFromPointA(0);
$calculateDistanceFromPointB = $calculateDistanceToPointA(4);
$distanceToPointB = $calculateDistanceFromPointB(0);

echo "$distanceToPointB\n";

// Flexible currying works
$calculateDistanceToPointA = FlexibleCurryingDistanceCalculation(1, 3);
$distanceToPointB = $calculateDistanceToPointA(4, 0);
echo "$distanceToPointB\n";

// All arguments provided at once 
$distanceToPointB = FlexibleCurryingDistanceCalculation(0, 0, 5, 0);
echo "$distanceToPointB\n";



// Function composition
function square($x)
{
    return $x * $x;
}

function doubler($x)
{
    return $x * 2;
}

function doubleSquare($x)
{
    return doubler(square($x));
}

echo doubleSquare(5) . "\n";