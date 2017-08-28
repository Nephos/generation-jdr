<?php
function getnomnain()
{
    $nomfamnain = db_get_one_random_partial_value("nomfamnain");

    return $nomfamnain;
}
