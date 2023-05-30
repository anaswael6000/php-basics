<?php
$dir = scandir(getcwd());
asort($dir);
foreach($dir as $key => $value){
    echo $value . "<br>\n";
}

// $dir = opendir(getcwd());

// while (($file = readdir($dir)) == TRUE){
//     echo $file . "<br>\n";
// }
// closedir($dir);

// $dir = dir(getcwd());

// echo "File path: " . $dir->path . "<br>\n";
// echo "File handle: " . $dir->handle . "<br>\n";

// // assigns the path and handle to a var then do nothing
// for ($i = 0; $i < 2; $i++){
//     $file = $dir->read();
// }

// while(($file = $dir->read()) == TRUE){
//     echo $file . "<br>\n";
// }
