<?php

$file = fopen("csv.txt", "r");
$newFile = fopen("newFile.txt", "a");
while(true)
{
    if (($line = fread($file, filesize($file))) !== FALSE )
    {
        $line = preg_replace("/,\w,\w/", "", $line);
        fwrite("newFile.txt", $line);
    }
}