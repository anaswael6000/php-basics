<?php

function generate_random_letter() : void
{
    echo array_rand(array_flip(range("a", "z")));
}

generate_random_letter();