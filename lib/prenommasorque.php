<?php
function getprenomorquehom()
{
    return db_get_one_random_partial_value("prenomorquehom");
}
