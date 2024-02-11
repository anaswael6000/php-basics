<?php

$handle = popen("echo test", "r");

$read = fread($handle, 16);
echo $read;

pclose($handle);

$handle = popen("sort", "w");
fwrite($handle, "line 2\n");
fwrite($handle, "line 1\n");
pclose($handle);