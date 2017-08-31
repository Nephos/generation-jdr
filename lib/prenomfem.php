<?php
function getprenomhumfem()
{
    return db_get_one_random_partial_value("prenomhum");
}
