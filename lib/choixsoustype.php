<?php
function choixsoustype($classe, $pnj)
{
    $tabletype = array(
                "Critique",
                "CA",
                "archers",
                "desctructeur",
                "d�sarmeur",
                "2armescourte",
                "2armeslongues",
                "2mains",
                "Monte"
            );

    $type=rand(0, count($tabletype)-1);

    $pnj->setSousclasse($type);
}
