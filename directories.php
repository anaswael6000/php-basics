<?php
print_r(scandir(getcwd()));
echo "<br><br>\n";

$directory = dir(getcwd());
echo "File path: " . $directory->path . "<br>\n";
echo "File handle: " . $directory->handle . "<br>\n";

while (($file = $directory->read()) != false){
    echo $file . "<br>\n";
}
echo "<br><br>\n";

$directory = opendir(getcwd());

while(($file = readdir($directory)) != FALSE){
    echo $file . "<br>\n";
}
closedir($directory);
