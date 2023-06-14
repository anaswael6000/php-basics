<?php

$alpha = array_merge(range("a", "z"), range("أ", "ى"));

function generate_random_letter() : void
{
    echo array_rand($alpha);
}

generate_random_letter();