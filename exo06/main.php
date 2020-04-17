<?php

function CustomSort(&$unsortedArray)
{
    do {
        $permutation = false;
        for ($i = 0; $i < (count($unsortedArray) - 1); $i++) {

            $currentElement = $unsortedArray[$i];
            $nextElement = $unsortedArray[$i + 1];
            if ($currentElement > $nextElement) {

                $unsortedArray[$i] = $nextElement;
                $unsortedArray[$i + 1] = $currentElement;
                $permutation = true;
            }
        }
    } while ($permutation);
}

$array = array(7, 28, 6, 18);
var_dump($array);
CustomSort($array);
var_dump($array);
