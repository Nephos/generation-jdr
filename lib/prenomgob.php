<?php
function getprenomngob()
{
    return db_get_one_random_partial_value("prenomgob");
}
