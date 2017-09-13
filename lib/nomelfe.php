<?php
function getnomelfe()
{
    $nomfamelfe = db_get_one_random_partial_value("nomfamelfe");
    return $nomfamelfe;
}
