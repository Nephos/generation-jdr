<?php
function getnomgnome()
{
    $nombre_de_noms = rand(1, 4);
    $table2 = db_get_random_partial_values("nomgnome1", $nombre_de_noms);
    $table3 = db_get_one_random_partial_value("nomgnome2");
    return ucfirst(join($table2, "") . $table3);
}
