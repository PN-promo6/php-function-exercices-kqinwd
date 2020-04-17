<!-- Vous devez écrire une fonction CanWrite qui prend 2 strings en paramètre.
Une première string magazine qui contient toutes le contenu du magazine.
Une deuxième string letter qui contient le message de la lettre de rançon.
Chaque lettre de la string du magazine ne peut être utilisée qu'une seule fois.
La fonction retournera un booléen: true si la lettre de rançon peut être écrite avec les
lettres du magazine sinon elle retournera false. -->

<?php

function canWrite($magazine, $ransomLetter)
{
    for ($i = 0; $i < strlen($ransomLetter); $i++) {

        $ransomLetterCurrentCharacter = $ransomLetter[$i];
        if ($ransomLetterCurrentCharacter == " ") {
            continue;
        }
        $hasLetter = false;

        for ($j = 0; $j < strlen($magazine); $j++) {
            $magazineCurrentLetter = $magazine[$j];
            if ($ransomLetterCurrentCharacter == $magazineCurrentLetter) {
                $hasLetter = true;
                $magazine[$j] = " ";
                break;
            }
        }

        if ($hasLetter == false) {
            return false;
        }
    }
    return true;
}

$magazine = "bonjour aujourd'hui il fait beau";
$ransomLetter = "content content";

if (canWrite($magazine, $ransomLetter)) {
    echo "You can write the ransom letter.";
} else {
    echo "You can't write it.";
}
