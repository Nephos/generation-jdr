<?php
function getnomhalf()
{
    $nomfamhalf = db_get_one_random_partial_value("nomfamhalf");
    return $nomfamhalf;
}
