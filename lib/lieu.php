<?php

function creerlieu()
{
    return db_get_one_random_partial_value("lieu");
}
