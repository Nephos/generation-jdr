<?php
function getprenomhalffem()
{
    return db_get_one_random_partial_value("prenomhalffem");
}
