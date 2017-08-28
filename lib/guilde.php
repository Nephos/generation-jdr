<?php
function creerguilde()
{
    include_once('nomevolue.php');
    $guilde='';
    $typedeguilde = db_get_one_random_partial_value("typedeguilde");

    $guilde.='Guilde de '.$typedeguilde.' ayant pour chef '.creernomevo(rand(0, 8), rand(1, 2));
    return $guilde;
}
