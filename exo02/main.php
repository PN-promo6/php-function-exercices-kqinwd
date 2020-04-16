<?php

function DecodeDNA($gen1, $gen2)
{

    $dna = "";

    for ($i = 0; $i < strlen($gen1); $i++) {

        if ($gen1[$i] != $gen2[$i]) {

            echo ($dna . "^"); // On peut aussi écrire echo($dna .= ".")
        } else {

            echo ($dna . " ");
        }
    }

    return $dna;
}

$firstGen = "GAGCCTACTAACGGGAT";
$secondGen = "CATCGTAATGACGGCCT";

echo DecodeDNA($firstGen, $secondGen);
