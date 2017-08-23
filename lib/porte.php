<?php

function detailport($i)
{
    if ($i==1) {
        $sortie=db_get_one_random_partial_value("detailportefaible");
    } elseif ($i==2) {
        $sortie=db_get_one_random_partial_value("detailportemoyen");
    } else {
        $sortie=db_get_one_random_partial_value("detailportehaut");
    }

    return $sortie;
}
