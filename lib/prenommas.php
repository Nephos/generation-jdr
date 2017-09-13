<?php
function getprenomhumhom()
{
    return db_get_one_random_partial_value("prenomhumhom");
}
