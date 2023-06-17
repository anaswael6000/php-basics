<?php

$a = array(
    [
        "id" => "50",
        "first_name" => "anas",
        "last_name" => "wael"
    ],
    [
        "id" => "51",
        "first_name" => "peter",
        "last_name" => "parker"
    ],
    [
        "id" => "52",
        "first_name" => "roger",
        "last_name" => "paterson"
    ]
);

$Ids = array_column($a, "first_name", "id");
print_r($Ids);

echo "<br>\n";

echo sizeof($a, 1);

echo "<br>\n";

$arr1 = ["Peter", "roger", "Andro"];
$arr2 = ["is nice", "is old", "is nice"];

$combination = array_combine($arr1, $arr2);

print_r($combination);

echo "<br>\n";

$array = array_change_key_case($combination, CASE_UPPER);
print_r($array);

echo "<br>\n";

$array = array_merge($arr1, $arr2);

$array = array_chunk($array, 2);

print_r($array);

echo "<br>\n";

$arr2 = ["Peter", "roger", "Peter", "anas", "anas", "Peter"];

print_r(array_count_values($arr2));

echo "<br>\n";

print_r(array_fill(0, 3, "anas is handsome"));

echo "<br>\n";

print_r(array_fill_keys($arr2, "is handsome"));

echo "<br>\n";

print_r(array_flip($a[0]));

echo "<br>\n";

print_r(array_intersect(["peter", "roger", "anas", "andro"], ["roger", "andro", "banana"]));

echo "<br>\n";

$array = array_filter(["Peter", "roger", "Peter", "anas", "anas", "Peter"], function ($var) { if ($var !== "Peter") { return true; } });

print_r($array);

echo "<br>\n";

if (array_key_exists("roger", $combination))
{
    echo "Roger is in the array";
}

echo "<br>\n";

$arr = array_keys($combination);

foreach($arr as $value)
{
    echo $value . " ";
}

echo "<br>\n";

$array = [1, 2, 3];

function myfunction(int $var): int
{
    return $var * 5;
}

print_r(array_map("myfunction", $array));

echo "<br>\n";

print_r(array_pad($array, - (count($array) + 1), "50"));
echo "<br>\n";
print_r(array_pad($array, count($array) + 1, "50"));

echo "<br>\n";

echo array_product($array);

echo "<br>\n";

array_pop($array);

print_r($array);

echo "<br>\n";

sort($arr);
print_r($arr);

echo "<br>\n";

echo $arr[array_rand($arr)];

echo "<br>\n";

array_push($arr, "anas");
print_r($arr);

echo "<br>\n";

$arr = array_reverse($arr);
print_r($arr);

echo "<br>\n";

print_r(array_sum(array(1, 2, 3, 4)));

echo "<br>\n";

$key = array_search("is nice", $combination);
echo $key;

echo "<br>\n";

print_r(array_slice($arr, 1, 2));

echo "<br>\n";

$removed_elements = array_splice($arr, 0, 2);
print_r($arr);
echo "<br>\n";

array_unshift($arr, "anas");
print_r($arr);

echo "<br>\n";

$rachel = "nice";
$harry = "stupid";
$Hisham = "old";
$people = compact("rachel", "harry", "Hisham");
print_r($people);

echo "<br>\n";
extract($combination);

echo "{$Andro} {$roger}";

echo "<br>\n";



echo "<br>\n";



echo "<br>\n";

echo "<br>\n";



echo "<br>\n";


