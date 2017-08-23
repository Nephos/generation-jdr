<?php

function creerchateau($taille)
{
    $deterioration = array("");
    $amelioration = db_get_random_partial_values("ChateauAmelioration");
    $chateau = db_get_one_random_partial_value("ChateauTaille$taille");

    if ($taille > 6) {
        $l = 100;
        $ameliorations = array();
        while (rand(1, 100) < $l) {
            $choix = rand(0, count($amelioration)-1);
            $ameliorations[strtolower($amelioration[$choix])] = $amelioration[$choix];
            unset($amelioration[$choix]);
            $amelioration = array_values($amelioration);
            $l=$l-5;
        }
        if (count($ameliorations) > 0) {
            $chateau.=' avec '.implode(", ", $ameliorations);
        }
    }
    return $chateau;
}

function creeraddonmili()
{
    return db_get_one_random_partial_value("ChateauAddon");
}
