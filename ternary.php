<?php

function Ternary_operator_test($number){
    $check = ($number > 30 ? "numbers is greater than thirty" : ($number > 20 ? 
    "number is greater than twenty" : ($number > 10 ? "number is greater than 10" : "number is lower
    than ten" )));  
    echo $check;
    }

echo Ternary_operator_test(3839);
echo "<br>";
echo Ternary_operator_test(29);
echo "<br>";
echo Ternary_operator_test(16);
echo "<br>";
echo Ternary_operator_test(3);
