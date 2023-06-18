<?php declare(strict_types=1);

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];
  
// Output
// Array
// (
// [0] => Array
//     (
//     [ag] => Ahmed Gamal
//     [om] => Osama Mohamed
//     )
// [1] => Array
//     (
//     [mg] => Mahmoud Gamal
//     [as] => Ahmed Samy
//     )
// [2] => Array
//     (
//     [fa] => Farid Ahmed
//     [sm] => Sayed Mohamed
//     )
// )

function solution1(array $array): array
{
    return array_chunk(array_change_key_case($array),2, true);
}

$array = solution1($friends);

print_r($array);

echo "<br>\n";

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )

function solution2(array $array1, array $array2): array
{
    return array_change_key_case(array_combine($array1, $array2));
}

$array = solution2($codes, $means);

print_r($array);

echo "<br>\n";


$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

// Output
// Array
// (
//   [as] => Ahmed Samy
//   [mg] => Mahmoud Gamal
//   [om] => Osama Mohamed
//   [ag] => Ahmed Gamal
// )

function solution3(array $array): array
{
    return array_change_key_case(array_reverse(array_flip($array)));
}

$array = solution3($friends);

print_r($array);

echo "<br>\n";

$nums = [10, 20, 30];

// Output
// 60
// 60

function solution4(array $numbers): int
{
    return array_reduce($numbers, function ($a, $b) { return $a + $b; } );
}

function another_solution_than_solution4(array $numbers): int
{
    return array_sum($numbers);
}

$output = solution4($nums);

echo $output . "<br>\n";

$output = another_solution_than_solution4($nums);

echo $output . "<br>\n";

$nums = [5, 10, 20, 5, 30, 40];

// Output
// 100

function solution5(array $numbers): int
{
    return array_reduce(array_diff($numbers, array(5)), function ($a, $b) { return $a + $b; } );
}

$output = solution5($nums);

echo $output . "<br>\n";

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )

function solution6(array $chars, string $char): array
{
    return array_pad($chars, count($chars) + 5, $char);
}

$array = solution6($chars, str_split($char)[0]);

print_r($array);
echo "<br>\n";

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names);
// Write Line Here
next($names);

echo current($names) . "<br>\n"; // "Sayed"

// Write Line Here
end($names);
echo current($names) . "<br>\n"; // "Ali"

// Write Line Here
reset($names);
echo current($names) . "<br>\n"; // "Osama"

// Write Line Here
end($names);
// Write Line Here
prev($names);
echo current($names) . "<br>\n"; // "Mahmoud"


$chars = ["A", "B", "C"];

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )

function solution7(array $chars = []): array
{
    // First solution
    $chars[] = "D";
    return $chars;

    // Second solution
    array_push($chars, "D");
    return  $chars;

    // Third solution
    return array_pad($chars, count($chars) + 1, "D");

    // Fourth solution
    $chars[count($chars)] = "D";
    return $chars;
}

$array = solution7($chars);

print_r($array);

echo "<br>\n";

$nums = [1, 2, 3, 4, 5, 6];

// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )


function solution8(array $array = []): array
{
    // the count($array) -1 gets the 5 number when using the - it gets teh 2 onwards
    return array_slice($array, - (count($array) - 1 ), 3, false);
}

$array = solution8($nums);

print_r($array);

echo "<br>\n";

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here

array_splice($mix, $nums[0] - 1, count($nums), $nums);

print_r($mix);
echo "<br>\n";

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )

$arr = ["A", "B", "C", "D", "E"];

// Output
//5

function solution9(array $array): int
{
    $iterator = $length = 0;
    while(array_key_exists($iterator, $array))
    {
        $length++;
        $iterator++;
    }
    return $length;
}


$length = solution9($arr);

echo $length . "<br>\n";

$nums = [11, 2, 10, 7, 20, 50];

// Output
// 100

function solution10(array $numbers = []): int 
{
    $result = $iterator = 0;
    while (@$numbers[$iterator] !== NULL)
    {
        $result += $numbers[$iterator];
        $iterator++;
    }
    return $result;
}

$sum = solution10($nums);

echo $sum . "<br>\n";

$nums = [10, 100, -20, 50, 30];

// Output
// 100

function solution11(array $array = []): int
{
    $max_number = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        if ($array[$i] > $max_number)
        {
            $max_number = $array[$i];
        }
    }
    return $max_number;
}

$max_number = solution11($nums);

echo $max_number . "<br>\n";

$nums = [10, 100, -20, 50, 30];

// Output
// -20

function solution12(array $array = []): int
{
    $minimum_number = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        if ($array[$i] < $minimum_number)
        {
            $minimum_number = $array[$i];
        }
    }
    return $minimum_number;
}

$minimum_number = solution12($nums);

echo $minimum_number . "<br>\n";

$chars = ["o", "r", "e", "z", "l", "E"];

// Output
// "Elzero"

function solution13(array $chars = []): string
{
    $string = "";
    for ($i = count($chars) - 1; $i != -1; $i--)
    {
        $string .= $chars[$i];
    }
    return $string;

}

$string = solution13($chars);

echo $string . "<br>\n";

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )

function solution14(array $array = []):array
{
    // We used the array_values() function to reindex the array
    return array_values(array_filter($array, function($value) {if (is_int($value) === true and $value%2 !== 0){return true;}}));
}

$output = solution14($mix);

print_r($output);
echo "<br>\n";

$nums = [1, 2, 3, 4, 5, 6];

// Shuffle without using the shufle() function

function solution15(array $numbers = []): array
{
    $new_array = [];
    while(TRUE)
    {
        $radndom_element = $numbers[array_rand($numbers)];
        if ( !in_array($radndom_element, $new_array))
        {
            $new_array[] = $radndom_element;
            continue;
        }
        if (count($new_array) === count($numbers))
        {
            break;
        }
    }
    return $new_array;
}

$shuffled_array = solution15($nums);

print_r($shuffled_array);
echo "<br>\n";

