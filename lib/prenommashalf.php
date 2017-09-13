<?php

function getprenomhalfhom()
{
    return db_get_one_random_partial_value("prenomhalfhom");
}
