<?php
function getprenomelfehom()
{
    return db_get_one_random_partial_value("prenomelfehom");
}
