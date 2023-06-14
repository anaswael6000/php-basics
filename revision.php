<?php

// $dir = scandir(getcwd());
// for ($i = 0; $i < count($dir); $i++)
// {
//     echo $dir[$i] . "<br>\n";
// }

// Another way 

// $dir = dir("C:\Users\anas\Documents");

// echo $dir->path . "<br>\n";
// echo $dir->handle . "<br>\n";

// while(TRUE)
// {
//     if (($file = $dir->read()) !== false)
//     {
//         echo $file . "<br>\n";
//     }
//     else
//     {
//         $dir->close();
//         break;
//     }
// }

// Another way

// $dir = opendir(getcwd());

// while(($file = readdir($dir)) !== false )
// {
//     echo $file . "<br>\n";
// }

// closedir($dir);