<!-- Vous devez écrire une fonction Sum qui prend 1 array en paramètre.
Cette méthode doit être capable de faire la somme des entiers de cet array.
Attention l’array peut contenir d’autres array. -->

<?php

function sum($tab)
{
    $total = 0;
    for ($i = 0; $i < count($tab); $i++) {
        $currentElement = $tab[$i];

        if (is_array($currentElement)) { // is_array est une méthode native de php pour savoir si l'élément courant est un tableau

            $total = $total + sum($currentElement);
        } else {
            $total = $total + $currentElement;
        }
    }
    return $total;
}

$tab1 = array(1, 2, 3, array(18, 7, 3, array(6, 7, 8)));
$result = sum($tab1);
echo $result;

?>