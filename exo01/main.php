<?php

function sumAll($int)
{
    $total = 0;
    for ($i = 0; $i <= $int; $i++) {
        $total = $total + $i;
    }
    return $total;
}

echo sumAll(7);
