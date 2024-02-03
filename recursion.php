<?php

// The 1instance of the function calls the 2instance of the function whom calls the 3instance 
// of the function endlessly
function greet()
{
    echo "Hello, world\n";
    greet();
}

greet();