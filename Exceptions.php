<?php
function divide($x, $y){
    if($y == 0){
        throw new Exception("Division by zero");
    }else{
        return $x / $y;
    }
}

$m = 8;
$n = 0;
try {
    echo divide($m, $n) . "<BR>";
} catch (Exception $e){
    echo "Unabel to divide" . "<br>";
} finally{
    echo "process is complete";
}
