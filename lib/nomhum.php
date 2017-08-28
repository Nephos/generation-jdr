<?php
function getnomhum()
{
    $nomfamhum = db_get_one_random_partial_value("nomfamhum");
    return $nomfamhum;
}
