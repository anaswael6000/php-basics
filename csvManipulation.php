<?php

// Returns a file with the most commonly used verbs in the present and past tense

$file = fopen("csv.txt", "r");
$newFile = fopen("newFile.txt", "a");
while(true)
{
    if (($line = fgets($file)) !== FALSE )
    {
        $line = preg_replace("/,\w+,\w+,\w+/", "", $line);
        fwrite($newFile, $line);
    }
    else
    {
        fclose($newFile);
        fclose($file);
        break;
    }
}