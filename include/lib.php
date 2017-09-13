<?php

function array_rand_value($array)
{
    return $array[rand(0, count($array)-1)];
}
