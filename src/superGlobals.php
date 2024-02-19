<?php

$url = $_SERVER['REQUEST_URI'] . PHP_EOL . "<br>";

echo $_SERVER['PHP_SELF'] . PHP_EOL . "<br>";
echo $_SERVER['SCRIPT_NAME'] . PHP_EOL . "<br>";

echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['QUERY_STRING'] . "<br>";