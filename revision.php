<?php

$string = "I'm Anas && Abd allah";

echo htmlspecialchars(addslashes($string)) . "\n";

echo addcslashes($string, "&'A") . "\n";

echo chr(ord("c")) . "\n";

echo chop($string) . "\n";

echo chunk_split($string, 4, "_") . "\n";

print_r(explode(" ", $string));

print_r($var);

$string = "anas\nroger\nraymond\n";

echo nl2br($string);

$var = "Anas";

$pattern = sprintf("/$var*/i");

echo (preg_match($pattern, $string)) ? "As expected\n" : "You are a noop";

echo "hello" <=> "hell";
echo "\n";
$value = NULL;
$username = $value ?? "anas";
echo $username . "\n";

$arr1 = [1, 2, 3];
$arr2 = [1, 2, 3, 4];

echo $arr1 <=> $arr2;
echo "\n";

echo number_format(10000000) . "\n";

parse_str("name=anas&&age=50", $result);
print_r($result);

echo str_contains($string, "anas") . "\n";
echo str_starts_with($string, "anas") . "\n";
$string = "anas is handsome\n";
if (str_ends_with($string, "handsome\n"))
{
    echo "handsome is the last word at the end of $string\n";
}

$string = "abandon,abandons,abandoned";
$array = str_getcsv($string);
print_r($array);

$string = "";

$string = str_pad($string, 5, "h");
echo $string . "\n";

echo str_repeat("h", 5) . "\n";

echo str_shuffle("hello, world") . "\n";

print_r(str_split("anas is handsome", 3));

$string = "<p>anas is in a paragraph tag <?php> Hello, world </p>";
echo strip_tags($string) . "\n";


$string = "an\as is \ han\\";
echo stripslashes($string) . "\n";
echo stripcslashes($string) . "\n";

echo $string[strpos($string, "h")] . "\n";
echo strstr($string, "is", true) . "\n";

$string = "anas is handsome";
echo strrchr($string, "h") . "\n";  // lsnfdjfkndldnfjdsklfnahfdshfkdskfnakldsfn;joifaeflkf                            

echo strpbrk($string, "dhs") . "\n";

$token = strtok($string, " ");

while($token)
{
    echo $token . "\n";
    $token = strtok(" ");
}

$string = "jeyyo, woryd";
$string = strtr($string, ["j" => "H", "y" => "l"]) . "\n";

$string = substr_replace($string, "", 6);
echo $string . "\n";

echo substr_compare($string, "Hello", 0, 5) . "\n";

$string = "anas is anas is anas";
echo substr_count($string, "anas") . "\n";

echo lcfirst("HELLO") . "\n";
echo ucfirst("hello") . "\n";
echo ucwords("anas is handsome") . "\n";

similar_text("anas is handsome", "string", $percentage);
echo $percentage . "\n";

echo levenshtein("hello", "Hello") . "\n";

$string1 = "Hello, john";
$string2 = "Hello, anas";

echo strncmp($string1, $string2, 7);