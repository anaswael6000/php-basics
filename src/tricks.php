<?php
function printname($name){
    if ($name == NULL) return;
    echo $name;
}

printname(NULL);
printname("anas");
echo "<br>\n";
// outputs anas only

$names = array("roger", "anas", "sarah");
foreach($names as $name){
    if ($name != "sarah"){
        continue;
    }
    echo $name . "<br>\n";
}
// outputs sarah only

?>
<?= "Hello, world"?>;
<?php
// line 22 outputs Hello, world
