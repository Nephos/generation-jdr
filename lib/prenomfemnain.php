<?php
function getprenomnainfem()
{
    return db_get_one_random_partial_value("prenomnainfem");
}
