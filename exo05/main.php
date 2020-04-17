<!-- Dans la classroom, créer un répertoire exo05 et à l’intérieur.
La substitution monoalphabétique est une des plus anciennes méthodes de chiffrement.
Elle consiste à remplacer systématiquement dans le message clair une lettre donnée de l'alphabet par une autre lettre.
Exemple, avec la configuration ci-dessous, le message COUCOU deviendrait EGWEGW:

ABCDEFGHIJKLMNOPQRSTUVWXYZ
AZERTYUIOPQSDFGHJKLMWXCVBN

Cette méthode a été utilisée pour crypter le message suivant, créer une fonction Decrypt pour le décrypter.
Commité également la version décryptée dans votre projet. -->

<?php

$codex = array(

    "A" => "A",
    "Z" => "B",
    "E" => "C",
    "R" => "D",
    "T" => "E",
    "Y" => "F",
    "U" => "G",
    "I" => "H",
    "O" => "I",
    "P" => "J",
    "Q" => "K",
    "S" => "L",
    "D" => "M",
    "F" => "N",
    "G" => "O",
    "H" => "P",
    "J" => "Q",
    "K" => "R",
    "L" => "S",
    "M" => "T",
    "W" => "U",
    "X" => "V",
    "C" => "W",
    "V" => "X",
    "B" => "Y",
    "N" => "Z",
    " " => " "
);

function decrypt($codex, $secretMessage)
{
    for ($i = 0; $i < strlen($secretMessage); $i++) {
        $currentElement = $secretMessage[$i];
        echo ($codex[$currentElement]);
    }
}

$secretMessage = "DAOMKT EGKZTAW LWK WF AKZKT HTKEIT MTFAOM TF LGF ZTE WF YKGDAUT DAOMKT KTFAKR HAK S GRTWK ASSTEIT SWO MOFM A HTW HKTL ET SAFUAUT TI ZGFPGWK DGFLOTWK RW EGKZTAW JWT XGWL TMTL PGSO JWT XGWL DT LTDZSTN ZTAW LAFL DTFMOK LO XGMKT KADAUT LT KAHHGKMT A XGMKT TDHSWDAUT XGWL TMTL ST HITFOV RTL IGMTL RT ETL ZGOL A ETL DGML ST EGKZTAW FT LT LTFM HAL RT PGOT TM HGWK DGFMKTK LA ZTSST XGOV OS GWXKT WF SAKUT ZTE SAOLLT MGDZTK LA HKGOT ST KTFAKR L TF LAOLOM TM ROM DGF ZGF DGFLOTWK AHHKTFTN JWT MGWM YSAMMTWK XOM AWV RTHTFL RT ETSWO JWO S TEGWMT ETMMT STEGF XAWM ZOTF WF YKGDAUT LAFL RGWMT ST EGKZTAW IGFMTWV TM EGFYWL PWKA DAOL WF HTW MAKR JW GF FT S B HKTFRKAOM HSWL";

echo decrypt($codex, $secretMessage);

// Message décodé : 
// MAITRE CORBEAU SUR UN ARBRE PERCHE TENAIT EN SON BEC UN FROMAGE MAITRE RENARD PAR L ODEUR ALLECHE LUI TINT A PEU PRES CE LANGAGE EH BONJOUR MONSIEUR DU CORBEAU QUE VOUS ETES JOLI QUE VOUS ME SEMBLEZ BEAU SANS MENTIR SI VOTRE RAMAGE SE RAPPORTE A VOTRE EMPLUMAGE VOUS ETES LE PHENIX DES HOTES DE CES BOIS A CES MOTS LE CORBEAU NE SE SENT PAS DE JOIE ET POUR MONTRER SA BELLE VOIX IL OUVRE UN LARGE BEC LAISSE TOMBER SA PROIE LE RENARD S EN SAISIT ET DIT MON BON MONSIEUR APPRENEZ QUE TOUT FLATTEUR VIT AUX DEPENS DE CELUI QUI L ECOUTE CETTE LECON VAUT BIEN UN FROMAGE SANS DOUTE LE CORBEAU HONTEUX ET CONFUS JURA MAIS UN PEU TARD QU ON NE L Y PRENDRAIT PLUS
?>