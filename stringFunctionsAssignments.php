<?php

$str = "Orezle";

echo ucfirst(strrev(lcfirst($str))) . "\n";
// Elzero

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo strtolower(str_repeat(str_pad($str, 4, "_"), $num)) . "\n";
// aaa_aaa_aaa_

$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, ['b']) . "\n";

// <b>Elzero</b>

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, 0, $four) . "\n";
// 1
echo substr_count($str, strtolower($o), -$four) . "\n";
// 2

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode("", $chars) . "\n";

// Output
// "Elzero"

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo substr_replace(ucfirst(strtolower(implode("", $chars))), "", 1, 2) . "\n";

// Output
// "Elzero"

$title = "E&z\$r0 W\$b Sch00&";

$replacements = ["\$" => "e", "0" => "o", "&" => "l"];

echo strtr($title, $replacements) . "\n";
// Output
// "Elzero Web School"
// 7