<?php
function getnomelfe()
{
    $nomfamelfe = db_get_random_partial_values("nomfamelf");
    return $nomfamelfe;
}
