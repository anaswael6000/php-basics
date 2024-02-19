<?php
$file = file_get_contents("newfile.txt");

$file = nl2br($file);

echo $file;

$number = 10000000;

echo number_format($number) . "\n";

$query_string = "name=Peter&age=43";

parse_str($query_string, $array);

print_r($array);

$string = "I adore writing code";

if (str_contains($string, "writing"))
{
    echo "The string contains the specified substring\n";
}

if (str_ends_with($string, "code"))
{
    echo "The specified string ends with the word code\n";
}

$file = fopen("csv.txt", "r");

$first_line = fgets($file);

$output = str_getcsv($first_line);

print_r($output);

$string = str_replace("adore", "like", $string);

echo $string . "\n";

$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
    echo "$var1 is equal to $var2 in a case-insensitive string comparison" . "\n";
}
$newstring = "I adore ";

$string = str_pad($string, strlen($string) + strlen($newstring), $newstring, STR_PAD_LEFT);
$string = str_replace("I like ", "", $string);
echo $string . "\n";

echo strstr($string, "writing", TRUE) . "\n";

// for ($i = 0; $i < strlen($string); $i++)
// {
//     echo $string[$i] . "\n";
// }

echo strrchr($string, "o") . "\n";
echo strpbrk($string, "gf") . "\n";

$token = strtok($string, " ");

while($token)
{
    $token = str_pad($token, strlen($token) + 2, "_", STR_PAD_BOTH);
    echo $token . "\n";
    $token = strtok(" ");
}

echo $string . "\n";

$array = array("o" => "a", "i" => "n");

echo strtr($string, "oi", "an") . "\n";

echo str_replace("oi", "an", $string) . "\n";

echo strtoupper(lcfirst($string)) . "\n";

$newstring = str_shuffle($string);

echo ucfirst($newstring) . "\n";

echo $string . "\n";

$str1 = "Hello, anas";
$str2 = "hello";

echo chunk_split($string, 5, "_") . "\n";

echo substr($string, 0, 6) . "\n";

if (substr_compare($str1, $str2, 0, 5, true) === 0)
{
    echo "The spcified substrings are equal\n";
}

$str1 .= " hello";

echo substr_count($str1, $str2) . "\n";

echo $str1 . "\n";

echo substr_replace($str1, "josh and ", strpos($str1, "anas"), 0) . "\n";

echo str_replace("anas", "josh", $str1) . "\n";

$str1 = "Hello, anas. It is a distinguished honor to meet you";

similar_text($str1, $str2, $percent) . "\n";

echo $percent . "\n";

echo strncasecmp($str1, $str2, 5) . "\n";