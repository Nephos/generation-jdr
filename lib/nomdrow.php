<?php

function getnomdrow()
{
    return db_get_one_random_partial_value("nomfamdrow");
}
