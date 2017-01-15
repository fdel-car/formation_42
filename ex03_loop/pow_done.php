#!/usr/bin/php -n
<?php

$nbr = 4; // nombre
$pow = 3; // power
$result = 1;

$i = 0;
while ($i < $pow)
{
    $result = $result * $nbr;
    $i++;
}

// $result = pow(nbr, pow);

echo $result;
?>
